<?php 
    include 'includes/menu_layout.php';       

    $est = 5;
    $mat = 78;
    $matr = 15;
    
    echo  '
            <h2 class="title">Dashboard</h2>
            
            <div class="dashboard">
                <div class="es"><h3>Estudiantes Registrados: '.$est.'</h3></div>
                <div class="mat"><h3>Materias Registradas: '.$mat.'</h3></div>
                <div class="matr"><h3>Matriculas Registradas: '.$matr.'</h3></div>
            </div>
    
            ';