var tblRepartidores;

document.addEventListener("DOMContentLoaded", function () {
  tblRepartidores = $("#tblRepartidores").DataTable({
    ajax: {
      url:  base_url + "repartidor/listar",
      dataSrc: "",
    },
    columns: [
      {
        'data': "id",
      },
      {
        'data': "nombre",
      },
      {
        'data': "email",
      },
      {
        'data': 'vehiculo_id',
      },
      {
        'data': 'estado',
      },
      {
        'data': 'acciones',
      }
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

function frmNuevoRe(){
  $("#NuevoRepartidor").modal("show");
}