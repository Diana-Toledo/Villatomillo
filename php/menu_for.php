<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <header>
    <section>
        <a href="" id="logo" target="_blank">FORMADOR</a>
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
      <h3>PROMOCIONES</h3>
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulProm_for.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>CODERS</h3>
      <input type="button" onclick="location.href='http://localhost/villatomillo/php/consulCod_for.php'" name="consultar" id="consultar" value="CONSULTAR">
    </div>
  </div>
  

    </main>
</body>
</html>
