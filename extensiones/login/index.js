form.addEventListener("submit", (e) => {
  e.preventDefault();

  const datosFormulario = new FormData(form);

  // message.innerHTML = (datosFormulario.get("usuario") == "") || (datosFormulario.get("contrasena") == "") ? "Ingrese todos los datos" : ""

  if (
    cadenaVacia(datosFormulario.get("usuario")) &&
    cadenaVacia(datosFormulario.get("contrasena"))
  ) {
    message.innerHTML = "¡INGRESE TODOS LOS DATOS!";
    setTimeout(() => {
      message.innerHTML = "";
    }, 2000);
  } else {
    fetch("controllers/controladorLogin.php", {
      method: "POST",
      body: datosFormulario,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data != 0) {
          message.innerHTML = data.formulario;
          setTimeout(eval(data.ejecutar), 500);
        } else {
          console.log(data);
          message.innerHTML = "No se pudo conectar!";
        }
      });

    console.log(
      datosFormulario.get("usuario"),
      datosFormulario.get("contrasena")
    );
  }
});

cadenaVacia = function (cadena) {
  if (!cadena) {
    return 1;
  } else {
    return 0;
  }
};
