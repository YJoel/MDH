document.getElementById("form").addEventListener("submit", (e) => {
    e.preventDefault()
    
    let message = document.getElementById("message")
    const datosFormulario = new FormData(document.getElementById("form"))

    // message.innerHTML = (datosFormulario.get("usuario") == "") || (datosFormulario.get("contrasena") == "") ? "Ingrese todos los datos" : ""

    fetch("controllers/controladorLogin.php", {
        method: "POST",
        body: datosFormulario
    })
        .then(response => response.json())
        .then(data => {
            console.log(data)

            if(data.response == 1){
                location.assign(`../adminpage/?nombre=${data.body["nombre"]}&apellido=${data.body["apellido"]}`)
            }
            else{
                message.innerHTML = "No existe el usuario"
            }
        })

    console.log(datosFormulario.get("usuario"), datosFormulario.get("contrasena"))
})