<?php

$pageName = "GESTION SOCIAL";

?>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>
    MDH -
    <?php echo $pageName; ?>
  </title>
  <link rel="stylesheet" href="../../css/styles.css" />
  <link rel="shortcut icon" href="../../images/simbolo_azul1.png" type="image/x-icon" />

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
        <h1> GESTION SOCIAL </h1>
      </div>

      <div class="gs">
        <div class="transicion">
          <div class="image">
            <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.34.jpeg" alt="">
            <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.36 (1).jpeg" alt="">
            <img src="../../images/GestionSocial/1/WhatsApp Image 2022-01-04 at 19.45.36.jpeg" alt="">
          </div>
        </div>
        <div class="transicion">
          <div class="image">
            <img src="../../images/GestionSocial/2/WhatsApp Image 2022-01-04 at 19.45.37 (1).jpeg" alt="">
            <img src="../../images/GestionSocial/2/WhatsApp Image 2022-01-04 at 19.45.37 (2).jpeg" alt="">
            <img src="../../images/GestionSocial/2/WhatsApp Image 2022-01-04 at 19.45.37 (3).jpeg" alt="">
            <img src="../../images/GestionSocial/2/WhatsApp Image 2022-01-04 at 19.45.37 (4).jpeg" alt="">
            <img src="../../images/GestionSocial/2/WhatsApp Image 2022-01-04 at 19.45.37.jpeg" alt="">
          </div>
        </div>
        <div class="transicion">
          <div class="image">
            <img src="../../images/GestionSocial/3/WhatsApp Image 2022-01-04 at 19.45.37 (1).jpeg" alt="">
            <img src="../../images/GestionSocial/3/WhatsApp Image 2022-01-04 at 19.45.37.jpeg" alt="">
            <img src="../../images/GestionSocial/3/WhatsApp Image 2022-01-04 at 19.45.38.jpeg" alt="">
          </div>
        </div>
        <div class="transicion">
          <div class="image">
            <img src="../../images/GestionSocial/4/RPLR (1).jpeg" alt="">
            <img src="../../images/GestionSocial/4/RPLR (2).jpeg" alt="">
            <img src="../../images/GestionSocial/4/RPLR (3).jpeg" alt="">
            <img src="../../images/GestionSocial/4/RPLR (4).jpeg" alt="">
            <img src="../../images/GestionSocial/4/RPLR (5).jpeg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php

  include_once "../../resources/footer.html";

  ?>

  <script>
    let imagenes = document.querySelectorAll(".image")
    fadeTransition(imagenes)
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>