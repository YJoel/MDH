function random() {
  var circulos = document.querySelectorAll(".circles");
  for (var element of circulos) {
    element.style.top = `${Math.random() * window.innerHeight + 1 - 150}px`;
    element.style.left = `${Math.random() * window.innerWidth + 1 - 150}px`;
  }
}

function fadeTransition(imagenes) {
  /* Escribir Código Aquí */

  imagenes.forEach((imagen) => {
    runFade(imagen.children, imagen.children.length - 1);
  });

  /* Escribir Código Aquí */
}

function cargarNoticias() {
  let noticias = document.querySelectorAll(".noticia");

  noticias.forEach((noticia) => {
    loadPreview(noticia);
  });
}

function loadPreview(el) {
  fetch("https://api.peekalink.io/", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-API-Key": "f5864670-8997-4364-bb50-e91151d08a6f",
    },
    body: JSON.stringify({
      link: el.children[1].children[0].href,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      el.children[1].children[0].children[0].src = data.image.url;
    })
    .catch((error) => console.error("Error:", error));
}
/**
function loadPreview(el) {
  fetch(`https://api.linkpreview.net/?q=${el.children[1].children[0].href}`, {
    headers: {
      "X-Linkpreview-Api-Key": "f11a7f5d2dee03d89c74efa0c889ddac",
    }
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      el.children[1].children[0].children[0].src = data.image;
    })
    .catch((error) => console.error("Error:", error));
}
 */
// Usar la función fetch para enviar la solicitud a la API
/*const url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example"
fetch(url)
    .then((response) => {
        console.log(response.url)
        const img = document.createElement("img")
        img.src = response.url
        document.getElementById("qr").append(img)
    })*/
