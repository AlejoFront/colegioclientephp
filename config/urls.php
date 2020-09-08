<?php

    $url_matricula = '';


    // Servicios extras

    $url_cantEst = 'servicioWebEstudiante/cantidadEstudiantesRegistrados';
    $url_cantMat = 'serviciosWebMateria/cantidadMateriasRegistradas';
    $url_cantMatr = 'serviciosWebMatricula/cantidadMatriculasRegistradas';

    //Servicio Estudiantes

    $url_estudiantes = 'servicioWebEstudiante/darEstudiantes';
    $url_buscarestudiante = 'servicioWebEstudiante/buscarEstudiante?documento';
    $url_eliminarestudiante = 'servicioWebEstudiante/eliminarEstudiante?documento';
    $url_buscarpromedioestudiante = 'serviciosWebMatricula/darPromedioEstudiante?documento';

    //Servicio Materia

    $url_buscarmateria = 'serviciosWebMateria/darMateriaPorCodigo?codigo';

    //Servicio Matriculas

    $url_list_matriculas = 'serviciosWebMatricula/darMatriculas';
    $url_matr_est_grado =  'serviciosWebMatricula/darMatriculasEstudianteGrado?documento';


    