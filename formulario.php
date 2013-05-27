<html lang='es' xml:lang='es' xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>Mercaprecios</title>
    <link rel="STYLESHEET" type="text/css" href="estilojava.css">
    <link rel="STYLESHEET" type="text/css" href="960.css">
    <link rel="STYLESHEET" type="text/css" href="estilo_propio.css"> 
    <link rel="STYLESHEET" type="text/css" href="estilomenu.css"> 
  </head>
  
  <body>
    <div id= "CONTENIDO" class= "container_12">
      <div id = "cabecera">
        <div id = "textoCab" class= "grid_12">
	       <p>MERCA PRECIOS</p>
        </div>
      </div>
      <div id = "DivMenu" class = "grid_12">
        <ul id = "menuHorizontal">
          <li><a style="filter:none" href="Index.html">Inicio</a></li>

          <li><a href="Clientes.html" style="#FFF21">Productos</a>
            <ul class="submenu">
              <li>Anadir</li>
              <li>Buscar</li>
            </ul>
          </li>

          <li><a href="instalacion.html">Ubicación</a>
          </li>
       
          <li><a href="contacto.html">Contactar</a>
            <ul class="submenu">
              <li>Localizacion</li>
              <li>Sus Datos</li>
              <li>Nuestros Datos</li>    
            </ul>
          </li>
       
          <li>Primera vez
            <ul class="submenu">
              <li>Registrate</li>
              <li>Facebook</li>
              <li>Twitter</li>
            </ul>
          </li>

        </ul>
      </div>
      <br>
      <div id="consulta" class= "grid_6">
        <?php 
        include("producto.php");
        ?>
      </div>

      <div id="div_form" class= "grid_6">
        <form action="insertar.php" method="post">
          <p>Nombre: <br><input type="text" name="nombre"></p>
          <p>Descripcion: <textarea rows="4" cols="50" name="descripcion">Inserte Descripción</textarea></p>
          <p>Precio: <br><input type="text" name="precio"><p>
          <input type="submit" name="Subir">
          <input type="reset" name="Borrar">
        </form>
      </div>

      <div id = "linea" class = "grid_12">
        <br> 
        <hr>
      </div>
      <div id = "piepagina" class = "container_12">
        <div id="Nombre" class="grid_12">
          <p>Merca Precios: Mercado Online S.A. Santa Cruz de Tenerife, C/Molinos de Agua 5. 38649. Arona-Espana</p>
          <p>Telefono:(+34)667667667</p>
        </div>
      </div>
    </div>
  </body>
</html>