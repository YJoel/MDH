<?php

$pageName = "PROGRAMAS";

?>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>
    MDH -
    <?php echo $pageName; ?>
  </title>
  <link rel="stylesheet" href="../../css/styles.css" />
  <link rel="shortcut icon" href="../../images/MDH.png" type="image/x-icon" />

  <script src="../../scripts/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta name="keywords" content="Libertad, Religiosa, Iglesia" />
  <meta name="description"
    content="La Fundación Mi derecho es un Hecho es una Organización sin ánimo de lucro que vela por los derechos humanos. Su propósito básico consiste en la construcción, desarrollo y fortalecimiento de la sociedad, formando líderes que sean capaces de desarrollar autonomía, Influencia, Transformación y construcción de una generación de conquista" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php

  include_once "../../resources/nav-bar.html";
  include_once "../../resources/animacion-circulos.html";

  ?>
  <div class="container">
    <div class="content">
      <div class='pageTitle'>
        <h1> PROGRAMAS </h1>
      </div>

      <div class="contenedor-programas">
        <div class="programa">
          <img src="../../images/Programas/ruta_pedagogica_fondo_blanco.png" alt="">
          <a class="desc" href="">
            RUTA PEDAGOGICA
          </a>
        </div>
        <div class="programa">
          <img src="../../images/Programas/amorEterno.jpg" alt="">
          <a class="desc" href="">
            AMOR ETERNO
          </a>
        </div>
        <div class="programa">
          <img src="../../images/Programas/hablemos.jpg" alt="">
          <a class="desc" href="">
            HABLEMOS CON EDUIN OTERO
          </a>
        </div>
        <div class="programa">
          <img src="../../images/Programas/hablemosdeLibertadReligiosa.jpg" alt="">
          <a class="desc" href="">
            HABLEMOS DE LIBERTAD RELIGIOSA
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php

  include_once "../../resources/footer.html";

  ?>

  <div id="qr"></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>