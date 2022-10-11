<?php
$db = new mysqli('localhost', 'cursos', 'alexis1266', 'financiera');
if(!$db){
    echo 'Error al conectar la Base de datos';
    exit;
}