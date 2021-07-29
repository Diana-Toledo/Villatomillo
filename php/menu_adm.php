<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <header>
    <section>
        <a href="" id="logo" target="_blank">ADMINISTRADOR</a>
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
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/fabrica.php'" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiFa.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>PROMOCIONES</h3>
      <input type="button" class="des" onclick="location.href=''" name="agregar" id="agregas" value="">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/promo.php'" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiPromo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>CODERS</h3>
      <input type="button" class="des" onclick="location.href=''" name="agregar" id="agregas" value="">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/coders.php'" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiCo.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>USUARIO</h3>
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/formulario_registro.php'" name="agregar" id="agregar" value="AGREGAR">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiUsu.php'" name="consultar" id="consultar" value="HISTORICO">
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulUsuarios.php'" name="consultar" id="consultar" value="CONSULTA">
    </div>
  </div>
</div>

    </main>
</body>
</html>



