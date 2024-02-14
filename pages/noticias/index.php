<?php

$pageName = "NOTICIAS";

?>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>
    MDH -
    <?php echo $pageName; ?>
  </title>
  <link rel="shortcut icon" href="../../images/MDH.png" type="image/x-icon" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta name="keywords" content="Libertad, Religiosa, Iglesia" />
  <meta name="description"
    content="La Fundación Mi derecho es un Hecho es una Organización sin ánimo de lucro que vela por los derechos humanos. Su propósito básico consiste en la construcción, desarrollo y fortalecimiento de la sociedad, formando líderes que sean capaces de desarrollar autonomía, Influencia, Transformación y construcción de una generación de conquista" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }
  </style>
  <?php
  include "../../css/styles.html";
  include_once "../../scripts/script.html";
  ?>
</head>

<body>
  <?php

  include_once "../../resources/nav-bar.html";
  include_once "../../resources/animacion-circulos.html";

  ?>
  <div class="container">
    <div class="content">
      <div class='pageTitle pb-4'>
        <h1> NOTICIAS </h1>
      </div>
      <div class="text-center informe">
        <div class="row justify-content-center" style="font-weight: bold;">
          INFORME FUNDADIÓN MI DERECHO ES UN HECHO
        </div>
        <div class="row">
          <a href="https://heyzine.com/flip-book/2db4a266d7.html" target="_blank">
            <img src="">

            </img>
          </a>
        </div>
      </div>
      <div class="text-center informe">
        <div class="row justify-content-center" style="font-weight: bold;">
          ASISTENCIA TÉCNICA
        </div>
        <div class="row">
          <a href="https://heyzine.com/flip-book/c6c82b7c23.html" target="_blank">
            <img src="">

            </img>
          </a>
        </div>
      </div>
      <div class="text-center informe">
        <div class="row justify-content-center" style="font-weight: bold;">
          INFORME
        </div>
        <div class="row">
          <a href="https://heyzine.com/flip-book/9e94aeea03.html" target="_blank">
            <img src="">

            </img>
          </a>
        </div>
      </div>
      <div class="text-center informe">
        <div class="row justify-content-center" style="font-weight: bold;">
          INFORME TRIMESTRAL SECTOR RELIGIOSO
        </div>
        <div class="row">
          <a href="https://heyzine.com/flip-book/6775c7f571.html" target="_blank">
            <img src="">

            </img>
          </a>
        </div>
      </div>
      <div class="noticiasContainer">
        <div class="row">
          <div class="noticiasDestacadas">
            <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.34.jpeg" alt="">
            <div class="description">
              <div>
                <a href="">Esta es una noticia de prueba para la página web de mi derecho es un hecho</a>
              </div>
            </div>
            <div class="botones">
              <div class="bt-r">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                </svg>
              </div>
              <div class="bt-i">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                  <path d="M400-240 160-480l240-240 56 58-142 142h486v80H314l142 142-56 58Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="noticia">
              <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.34.jpeg" alt="">
              <div class="description">
                <div>
                  <a href="">
                    Esta es una noticia de prueba para la página web de mi derecho es un hecho
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="noticia">
              <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.34.jpeg" alt="">
              <div class="description">
                <div>
                  <a href="">
                    Esta es una noticia de prueba para la página web de mi derecho es un hecho
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="noticia">
              <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.34.jpeg" alt="">
              <div class="description">
                <div>
                  <a href="">
                    Esta es una noticia de prueba para la página web de mi derecho es un hecho
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php

  include_once "../../resources/footer.html";

  ?>
  <script>
    cargarNoticias()
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>