function random() {
    var circulos = document.querySelectorAll(".circles")
    for (var element of circulos) {
        element.style.top = `${((Math.random() * window.innerHeight) + 1) - 150}px`
        element.style.left = `${((Math.random() * window.innerWidth) + 1) - 150}px`
    }
}

function fadeTransition() {
    /* Escribir Código Aquí */

    var imagenes = document.querySelectorAll(".image")

    for (var imagen of imagenes) {
        runFade(imagen.children)
    }

    /* Escribir Código Aquí */
}

function runFade(array) {
    var i = array.length - 1

    setInterval(() => {
        if (i == 0) {
            array[i].style.opacity = 0
            array[array.length - 1].style.opacity = 1
            i = array.length - 1
        }
        else {
            array[i].style.opacity = 0
            array[i - 1].style.opacity = 1
            i--
        }
    }, 5000)

}

// Usar la función fetch para enviar la solicitud a la API
/*const url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example"
fetch(url)
    .then((response) => {
        console.log(response.url)
        const img = document.createElement("img")
        img.src = response.url
        document.getElementById("qr").append(img)
    })*/