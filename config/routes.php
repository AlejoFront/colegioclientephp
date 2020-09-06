<?php

    include 'ip.php';     
    include 'proyecto.php';
    include 'urls.php';


    // esto es informacion del dashboard 
    $estudiantes = json_decode(file_get_contents($ip.$proyecto.$url_cantEst),true);
    $materias = json_decode(file_get_contents($ip.$proyecto.$url_cantMat),true);
    $matriculas = json_decode(file_get_contents($ip.$proyecto.$url_cantMatr),true);


    // para la clase AAA -> estudiante
    $listarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_estudiantes),true);
    