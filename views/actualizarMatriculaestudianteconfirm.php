<?php
$codigoMatricula = 0;
if(isset($_POST['botonupdate'])){
    $codigoMatricula = $_POST['cod'];

    
}

echo "->>>>> ".$codigoMatricula;