<?php
$user = $_POST ['user'];
$pass = $_POST ['pass'];

require_once ('http://127.0.0.1:5500/main.html');
echo "
    usuario = '$user';
    contrasena = '$pass'; 
";
require_once ('tutorial14B.html');

?>

