<?php
require_once("autoload.php");
$todos = new Acciones();
$resultado = $todos->ConsultaTodos();
print_r("<pre>");
print_r ($resultado);
print_r("<pre>");
?>