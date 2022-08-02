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
        console.log(res);
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
