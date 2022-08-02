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
    const url = base_url + "usuario/validar";
    const frm = document.getElementById("frmLogin");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        if (res == "1") {
          window.location = base_url + "administrador";
        } else if (res == "2") {
          window.location = base_url + "repartidor";
        } else if (res == "3") {
          window.location = base_url + "cliente";
        } else {
          document.getElementById("alert").classList.remove("d-none");
          document.getElementById("alert").innerHTML = res;
        }
      }
    };
  }
}

function frmNuevoRe() {
  document.getElementById("title").innerHTML = "Nuevo Repartidor";
  document.getElementById("btnAccion").innerHTML = "Registrar";
  document.getElementById("passwords").classList.remove("d-none");
  document.getElementById("campoVehi").classList.remove("d-none");
  document.getElementById("frmNuevoRe").reset();
  $("#NuevoRepartidor").modal("show");
  document.getElementById("id").value = "";
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
    marca.value == "" ||
    tipoVehiculo.value == "" ||
    modelo.value == "" ||
    placa.value == ""
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
        if (res == "Registrado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repartidor registrado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          $("#frmNuevoRe").modal("hiden");
          tblRepartidores.ajax.reload();
        } else if (res == "Ya existe el repartidor") {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
        } else if (res == "Modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repartidor Modificado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          $("#NuevoRepartidor").modal("hide");
          tblRepartidores.ajax.reload();
        } else {
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

function btnEditar(id) {
  document.getElementById("title").innerHTML = "Editar Repartidor";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "repartidor/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("email").value = res.email;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("idVehiculo").value = res.vehiculo_id;
      document.getElementById("marca").value = res.marca;
      document.getElementById("modelo").value = res.modelo;
      document.getElementById("placa").value = res.placa;
      document.getElementById("vehiculo").value = res.tipo;
      document.getElementById("campoVehi").classList.add("d-none");
      document.getElementById("passwords").classList.add("d-none");
      $("#NuevoRepartidor").modal("show");
    }
  };
}

function btnInhabilitar(id) {
  Swal.fire({
    title: "¿Esta Seguro?",
    text: "!El repartidor sera inhabilitado!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, Inhabilitar!",
  }).then((result) => {
    if (result.isConfirmed) {
      const url = base_url + "repartidor/inhabilitar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = this.responseText;
          if (res == "inhabilitado") {
            Swal.fire("Mensaje!", res, "error");
            tblRepartidores.ajax.reload();
          } else {
            Swal.fire("Mensaje!", "Repartidor inhabilitado.", "success");
            tblRepartidores.ajax.reload();
          }
        }
      };
    }
  });
}

function btnHabilitar(id) {
  Swal.fire({
    title: "¿Esta Seguro?",
    text: "!El repartidor sera Habilitado!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, Habilitar!",
  }).then((result) => {
    if (result.isConfirmed) {
      const url = base_url + "repartidor/habilitar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = this.responseText;
          if (res == "inhabilitado") {
            Swal.fire("Mensaje!", res, "error");
          } else {
            Swal.fire("Mensaje!", "Repartidor habilitado.", "success");
            tblRepartidores.ajax.reload();
          }
        }
      };
    }
  });
}
