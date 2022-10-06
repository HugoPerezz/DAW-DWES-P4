<?php

$numeroLinias = $_POST['numero'];

for($i=1;$i<=$numeroLinias;$i++){
    echo "Escribiendo $i líneas";
    echo '<br>';
}