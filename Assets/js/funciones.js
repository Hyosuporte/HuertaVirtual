var tblRepartidores;

document.addEventListener("DOMContentLoaded", function () {
  tblRepartidores = $("#tblRepartidores").DataTable({
    ajax: {
      url: base_url + "repartidor/listar",
      dataSrc: "",
    },
    columns: [
      {
        data: "id",
      },
      {
        data: "nombre",
      },
      {
        data: "email",
      },
      {
        data: "vehiculo_id",
      },
      {
        data: "estado",
      },
      {
        data: "acciones",
      },
    ],
  });
});

function frmLogin(e) {
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  if (email.value == "") {
    password.classList.remove("is-invalid");
    email.classList.add("is-invalid");
    email.focus();
  } else if (password.value == "") {
    email.classList.remove("is-invalid");
    password.classList.add("is-invalid");
    password.focus();
  } else {
    const url = base_url + "repartidor/valid";
    const frm = document.getElementById("frmLogin");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        if (res == "correcto") {
          window.location = base_url + "repartidor";
        } else {
          document.getElementById("alert").classList.remove("d-none");
          document.getElementById("alert").innerHTML = res;
        }
      }
    };
  }
}

function frmNuevoRe() {
  $("#NuevoRepartidor").modal("show");
}

function frmRegistroRepar(e) {
  const email = document.getElementById("email");
  const nombre = document.getElementById("nombre");
  const password = document.getElementById("password");
  const passwordConf = document.getElementById("passwordConf");
  const idVehiculo = document.getElementById("idVehiculo");
  const marca = document.getElementById("marca");
  const modelo = document.getElementById("modelo");
  const placa = document.getElementById("placa");
  const tipoVehiculo = document.getElementById("vehiculo");
  if (
    email.value == "" ||
    nombre.value == "" ||
    password.value == "" ||
    passwordConf.value == "" ||
    marca.value == "" ||
    tipoVehiculo.value == "" ||
    modelo.value == "" ||
    placa.value == "" ||
    idVehiculo.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  } else if (password.value != passwordConf.value) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Las contraseñas deben ser iguales",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    const url = base_url + "repartidor/registrar";
    const frm = document.getElementById("frmNuevoRe");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        if(res == "Registrado"){
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repartidor registrado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#frmNuevoRe").modal("hidden");
        }else{
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
        }
      }
    };
  }
}
