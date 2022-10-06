<?php
if(!$_POST){
    header('Location: index.php');
}
$letras= $_POST['nombre'];
echo strlen($letras);