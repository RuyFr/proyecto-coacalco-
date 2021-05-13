<?php
$conexion = mysqli_connect('localhost', 'root', '', 'registro');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Busqueda</title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <DIV>
        <header id="encabezado">
            <a id="logo" href="#">
                <img src="logo coacalco.png" href="https://coacalco.gob.mx/">
                <span><h3>SISTEMA INTERNO DE REGISTROS</h3></span>
            </a>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="iniciar sesion.php">Inicar sesión</a></li>
                </ul>
            </nav>
        </header>
        </DIV>
          <div class="menu-lateral">
              <a href="#">Estadisticas</a>
              <a href="#">Registros</a>
              <a href="#">Menu</a>
              <a href ="#">Nuevo Registro</a>
          </div>
          <div id="entrada">
              <section>
                 <table>
                  <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>CORREO</td>
                    <td>PROGRAMA</td>
                    <td>EDAD</td>
                    <td>NUMERO</td>
                    <td>SEXO</td>
                    <td>DIRECCION</td>
                    <td>CURP</td>
                  </tr>

<?php

$sql = "SELECT * from registros";
$result = mysqli_query($conexion, $sql);
while($mostrar = mysqli_fetch_array($result)){
?>
                  <tr>
                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['correo']?></td>
                    <td><?php echo $mostrar['programa']?></td>
                    <td><?php echo $mostrar['edad']?></td>
                    <td><?php echo $mostrar['numero']?></td>
                    <td><?php echo $mostrar['sexo']?></td>
                    <td><?php echo $mostrar['direccion']?></td>
                    <td><?php echo $mostrar['curp']?></td>
                  </tr>
<?php
}
 ?>
                 </table>
              </section>
          </div>
    </body>
</html>
