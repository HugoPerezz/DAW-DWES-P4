<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$contraseña = $_POST['contraseña'];
$edad = $_POST['edad'];
$alumno = $_POST['alumno'] ?? 'Anonimo';
$profesor = $_POST['profesor'] ?? 'Anonimo';
$comentarios = $_POST['comentarios'];

if($alumno != 'Anonimo') {
    echo "$nombre $apellido con la contraseña $contraseña y $edad años de edad, es un alumno. Comentarios: $comentarios";
}else{
    echo "$nombre $apellido con la contraseña $contraseña y $edad años de edad, es un profesor. Comentarios: $comentarios";
}