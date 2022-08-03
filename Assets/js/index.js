var tblRepartidores, tblProveedores, tblPlantas;

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

  tblProveedores = $("#tblProveedores").DataTable({
    ajax: {
      url: base_url + "proveedor/listar",
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
        data: "semillas",
      },
      {
        data: "cantidad",
      },
      {
        data: "acciones",
      },
    ],
  });

  tblPlantas = $("#tblPlantas").DataTable({
    ajax: {
      url: base_url + "planta/listar",
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
        data: "siembra",
      },
      {
        data: "riego",
      },
      {
        data: "sol",
      },
      {
        data: "temperatura",
      },
      {
        data: "cuidados",
      },
      {
        data: "cantidad",
      },
      {
        data: "precio",
      },
      {
        data: "categoria",
      },
      {
        data: "acciones",
      },
    ],
  });
});

function frmNuevoRe() {
  document.getElementById("title").innerHTML = "Nuevo Repartidor";
  document.getElementById("btnAccion").innerHTML = "Registrar";
  document.getElementById("passwords").classList.remove("d-none");
  document.getElementById("campoVehi").classList.remove("d-none");
  document.getElementById("frmNuevoRe").reset();
  $("#NuevoRepartidor").modal("show");
  document.getElementById("id").value = "";
}

function frmNuevoPr() {
  document.getElementById("title").innerHTML = "Nuevo Proveedor";
  document.getElementById("btnAccion").innerHTML = "Registrar";
  document.getElementById("frmNuevoPro").reset();
  $("#NuevoProveedor").modal("show");
  document.getElementById("id").value = "";
}

function frmNuevaPlan() {
  document.getElementById("title").innerHTML = "Nueva Planta";
  document.getElementById("btnAccion").innerHTML = "Registrar";
  document.getElementById("frmNuevaPlan").reset();
  $("#NuevaPlanta").modal("show");
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
          $("#frmNuevoRe").modal("hidden");
          tblRepartidores.ajax.reload();
        } else if (res == "Ya existe el repartidor") {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: res,
            showConfirmButton: false,
            timer: 3000,
          });
          tblRepartidores.ajax.reload();
        } else if (res == "Modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Repartidor Modificado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          tblRepartidores.ajax.reload();
          $("#NuevoRepartidor").modal("hide");
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

function frmRegistroProv(e) {
  const email = document.getElementById("email");
  const nombre = document.getElementById("nombre");
  const semilla = document.getElementById("semilla");
  const cantidad = document.getElementById("cantidad");
  if (
    email.value == "" ||
    nombre.value == "" ||
    semilla.value == "" ||
    cantidad.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    const url = base_url + "proveedor/registrar";
    const frm = document.getElementById("frmNuevoPro");
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
            title: "Proveedor registrado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          tblProveedores.ajax.reload();
          $("#NuevoProveedor").modal("hide");
        } else if (res == "Modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Proveedor Modificado con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          tblProveedores.ajax.reload();
          $("#NuevoProveedor").modal("hide");
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

function frmRegistroPlan(e) {
  const nombre = document.getElementById("nombre");
  const siembra = document.getElementById("siembra");
  const cantidad = document.getElementById("cantidad");
  const precio = document.getElementById("precio");
  const categoria = document.getElementById("categoria");
  if (
    nombre.value == "" ||
    siembra.value == "" ||
    cantidad.value == "" ||
    precio.value == "" ||
    categoria.value == ""
  ) {
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    const url = base_url + "planta/registrar";
    const frm = document.getElementById("frmNuevaPlan");
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
            title: "Planta registrada con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          frm.reset();
          tblPlantas.ajax.reload();
          $("#NuevaPlanta").modal("hide");
        } else if (res == "Modificado") {
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Planta Modificada con exito...",
            showConfirmButton: false,
            timer: 3000,
          });
          tblPlantas.ajax.reload();
          $("#NuevaPlanta").modal("hide");
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

function btnEditarPro(id) {
  document.getElementById("title").innerHTML = "Editar Proveedor";
  document.getElementById("btnAccion").innerHTML = "Modificar";
  const url = base_url + "proveedor/editar/" + id;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      document.getElementById("id").value = res.id;
      document.getElementById("email").value = res.email;
      document.getElementById("nombre").value = res.nombre;
      document.getElementById("semilla").value = res.semillas;
      document.getElementById("cantidad").value = res.cantidad;
      $("#NuevoProveedor").modal("show");
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

function btnEliminarPro(id) {
  Swal.fire({
    title: "¿Esta Seguro?",
    text: "!El proveedor sera eliminar!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, Eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      const url = base_url + "proveedor/eliminar/" + id;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = this.responseText;
          if (res == "eliminar") {
            Swal.fire("Mensaje!", res, "error");
            tblRepartidores.ajax.reload();
          } else {
            Swal.fire("Mensaje!", "Proveedor Eliminado.", "success");
            tblProveedores.ajax.reload();
          }
        }
      };
    }
  });
}
