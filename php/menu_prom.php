<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <header>
    <section>
        <a href="" id="logo" target="_blank">RESPONSABLE PROMOCIÓN</a>
        <label for="toggle-1" class="toggle-menu">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </label>
        <input type="checkbox" id="toggle-1">
        <nav>
            <ul>
                <li><a href="php/cerrar.php">SALIR</a></li>
            </ul>
        </nav>
    </section>
</header>

 
<main class="content1">
<div class="row">
  <div class="column">
    <div class="card">
      <h3>FABRICAS</h3>
      <input type="button" class="des" onclick="location.href=''" name="agregar" id="agregas" value="">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulFab_promo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>PROMOCIONES</h3>
      <input type="button" onclick="location.href=''" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulProm_promo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>CODERS</h3>
      <input type="button" onclick="location.href=''" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulCod_promo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>FORMADORES</h3>
      <input type="button" onclick="location.href=''" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulFor_promo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
</div>

    </main>
</body>
</html>
