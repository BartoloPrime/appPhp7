<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroJS Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    

    <script src="php7/solucion.js"></script>

</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroJS</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoJS.php>Básica</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la velocidad de un satelite que gira siguiendo una orbita</h2>
  <p>Descripción:</p>
  <p>Hallar la velocidad angular de un satelite artificial de la tierra que gira siguiendo una orbita circular con periodo de revolucion de 88 minutos</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    W=2pi/T
</section>
<section class="datos">
<h2>Datos:</h2>
   T=88
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La velocidad del satelite es:<br>
   (2x3.1416)/88=0.07139983304</p>
     <button onclick="calcula_densidad();">Presiona para calcular</button>

</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div></section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
