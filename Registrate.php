<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/registrar.css">
	<title></title>
</head>
<body>

	<header>
		<div class="contenedor">
			<h1 class="" src="img/log.png" > MACONDOLAB - CÚCUTA</h1>
			<input type="checkbox" id="menu-bar">
			<label class="icon-menu" for="menu-bar"></label>
			<nav class="menu">
				<a href="index.html"> Inicio</a>
				<a href="nosotros.html"> Nosotros</a>
				<a href="contacto.html"> Contacto</a>
				
			</nav>
		</div>
	</header>

	<h1 class="text-center blanco">Registro de Emprendedores</h1>
    <!--formulario--->
                <form class="text-center bg-dark" action="registro.php" method="POST">
                  
                    <img class="logo" src="IMG/logoma.png" width="130px" height="130px">

                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">saludo</label>
                        <input type="text" class="form-control bg-light " name="saludo">
                     </div> 

                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">nombre</label>
                      <input type="text" class="form-control  bg-light" name="nombre">

                    </div>

                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">apellido</label>
                      <input type="text" class="form-control  bg-light" name="apellido">

                    </div>

                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">edad</label>
                        <input type="text" class="form-control bg-light " name="edad">
                      </div>

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">movil</label>
                        <input type="text" class="form-control bg-light " name="movil" >

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">tel oficina</label>
                        <input type="text" class="form-control bg-light " name="tel_oficina">
                      </div> 

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">correo electronico</label>
                        <input type="text" class="form-control bg-light " name="email">
                      </div> 

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">programa academico</label>
                        <input type="text" class="form-control bg-light " name="prom_academico">
                      </div> 

                  </form><br>

   <h1 class="text-center blanco">Registro de Emprendimiento</h1>
    <!--formulario--->
                <form1 class="text-center bg-dark" action="registro.php" method="POST">
                  
                    <img class="logo" src="IMG/logoma.png" width="130px" height="130px">

                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Esta registrado mi emprendimiento</label>
                        <input type="text" class="form-control bg-light " name="Esta registrado mi emprendimiento">
                     </div> 

                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Nombre del emprendimiento</label>
                      <input type="text" class="form-control  bg-light" name="nombre del emprendimiento">

                    </div>

                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Trabaja actualmente</label>
                      <input type="text" class="form-control  bg-light" name="Trabaja actualmente">

                    </div>

                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Empleado o independiente</label>
                        <input type="text" class="form-control bg-light " name="Empleado o independiente">
                      </div>

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Interesado en emprender</label>
                        <input type="text" class="form-control bg-light " name="Interesado en emprender" >

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Tiene alguna idea de negocio</label>
                        <input type="text" class="form-control bg-light " name="Tiene alguna idea de negocio">
                      </div> 

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Tipo de emprendimiento</label>
                        <input type="text" class="form-control bg-light " name="Tipo de emprendimiento">
                      </div> 

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Nivel de emprendimiento</label>
                        <input type="text" class="form-control bg-light " name="Nivel de emprendimiento">
                      </div> 

                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Nivel de escolaridad</label>
                        <input type="text" class="form-control bg-light " name="Nivel de escolaridad">
                      </div> 

                       <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Descripcion del emprendimiento</label>
                        <input type="text" class="form-control bg-light " name="Descripcion del emprendimiento">
                      </div> 

                     

                       <div id="emailHelp" class="verde">Verifique los datos proporcionados</div>
                      </div>

                    <button type="submit" class="btn btn-success">Registrar</button>
                  </form1><br>
               


</body>
</html>