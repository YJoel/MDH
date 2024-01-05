function random() {
    var circulos = document.querySelectorAll(".circles")
    for (var element of circulos) {
        element.style.top = `${((Math.random() * window.innerHeight) + 1) - 150}px`
        element.style.left = `${((Math.random() * window.innerWidth) + 1) - 150}px`
    }
}

let record = "mdh"
function itemsRedirect() {
    var items = document.querySelectorAll(".items > a:not(.img, .botonMenu)")
    var content = document.querySelector(".content")
    var title = document.querySelector("title")

    for (let i = 0; i < items.length - 1; i++) {
        items[i].addEventListener("click", (e) => {
            e.preventDefault()

            if (record != items[i].id) {
                record = items[i].id
                title.innerHTML = items[i].innerHTML

                fetch("./rutas/index.json")
                    .then(response => response.json())
                    .then(data => {
                        // location.assign(data.inicio[`${items[i].id.toLocaleLowerCase()}`])
                        fetch(data.inicio[`${items[i].id.toLocaleLowerCase()}`])
                            .then(object => object.text())
                            .then(text => {
                                content.innerHTML = text
                                random()
                                fadeTransition()
                            })
                    })/*
            fetch(items[i].href)
                .then(object => object.text())
                .then(text => {
                    content.innerHTML = text
                    random()
                    fadeTransition()
                })*/
            }
        })
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