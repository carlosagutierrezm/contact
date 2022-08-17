<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="text" name="pais" placeholder="Pais">
        <input type="text" name="celular" placeholder="Celular">
        <input type="email" name="email" placeholder="E-Mail">
    	<input type="submit" name="register">
    </form>
    <?php 
        include("register.php")
     ?>
    
</body>
</html>