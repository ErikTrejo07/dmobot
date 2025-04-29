<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

echo "Hola ".$nombre."<br/>Hemos resibido tu mensaje:<br/>".$mensaje;

<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

echo "Hola ".$nombre."<br/>Hemos recibido tu mensaje:<br/>".$mensaje;

mail('set6253@gmail.com', 'PEDIDOS TANKING', $correo." ".$mensaje);

?>

 
