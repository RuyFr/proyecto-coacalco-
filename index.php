<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto Coacalco</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div><header id="encabezado">
            <a id="logo" href="#">
                <img src="logo coacalco.png">
                <span><h3>PROGRAMAS DE BIENESTAR COACALCO</h3></span>
            </a>
            <div><nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Registrarse</a></li>
                    <li><a href="iniciar sesion.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>
        </div>
        </div>
        <div id="contenido">
        <section id="seccion">
        <form id="form" action="conexion.php"  method="POST">
            <h4>REGISTRO NUEVO </h4>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input class="controls" type="email" name="correo" id="correo" placeholder="ejemplo@gmail.com">
            <input class="controls" type="text" name="programa" id="programa" placeholder="Programa al que pertenece">
            <input class="controls" type="text" name="edad" id="edad" placeholder="Edad">
            <input class="controls" type="text" name="numero" id="numero" placeholder="Numero de telefono">
            <input class="controls" type="text" name="sexo" id="sexo" placeholder="Sexo">
            <input class="controls" type="text" name="direccion" id="direccion" placeholder="Calle, Numero exterior-interior, Colonia">
            <input class="controls" type="text" name="curp" id="curp" placeholder="CURP">
            <button class="boton" type="submit" name="registrar">Registrar</button>
        </form> 
        </section>
        <section id="paralelo">
        <aside>
                <form id="buscar">
                    <h4>BUSQUEDA</h4>
                    <nav>
                        <ul>
                            <li><a href="dashboard.php">BUSCAR</a></li>
                        </ul>
                    </nav>
                </form>
        </aside>
        </section>
    </body>
</html>
