<?php  
$conex = mysql_connect("localhost", "root", "", "formulario");


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['pais']) >= 1, && strlen($_POST['celular']) >= 1, && strlen($_POST['email']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $pais = trim($_POST['pais']);
	    $celular = trim($_POST['celular']);
	    $email = trim($_POST['email']);
	    $consulta = "INSERT INTO formulario(nombre_completo, pais, celular, correo) VALUES ('$nombre','$pais','$celular', '$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>