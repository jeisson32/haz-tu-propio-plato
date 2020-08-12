<!DOCTYPE  html>
<html lang="es"
<head> 
<title>formulario de contacto-  mensaje enviado</title>
<meta charset="UFT-8">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php 
$myemail = 'empresadearepasjmv@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<center>
<h1>CONTACTO</h1>
<form action="enviar.php" method="post">
<input type="text" name="nombre" placeholder="NOMBRE">
<input type="email" name="email" placeholder="CORREO">
<br>
<textarea type="text" name="mensaje" placeholder="Escriba el plato que desea crear"></textarea>
<br>
<input type="sumbit" value="ENVIAR">
</form>
</center>

</body>
</html>
