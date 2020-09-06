<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio | Servicio Web Rest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <?php $url = getcwd(); ?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Colegio</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php
                    if(strpos($url,'\colegioclientephp\views')){
                        echo '<a class="nav-link" href="../index.php">Principal</a>';
                    }else{
                        echo '<a class="nav-link" href="./index.php">Principal</a>';
                    }
                ?>
                
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Estudiantes
                </a>
                <div class="dropdown-menu">

                <?php
                        if ( strpos($url,'\views')){
                            echo 
                            '<a class="dropdown-item" href="./agregarestudiante.php">Agregar Estudiante</a>'.
                            '<a class="dropdown-item" href="./listarestudiantes.php">Listar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./buscarestudiantes.php">Buscar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./eliminarestudiante.php">Eliminar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./promedioestudiante.php">Promedio Estudiante</a>'
                            ;                       
                        }else{
                            echo 
                            '<a class="dropdown-item" href="./views/agregarestudiante.php">Agregar Estudiante</a>'.
                            '<a class="dropdown-item" href="./views/listarestudiantes.php">Listar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./views/buscarestudiantes.php">Buscar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./views/eliminarestudiante.php">Eliminar Estudiantes</a>'.
                            '<a class="dropdown-item" href="./views/promedioestudiante.php">Promedio Estudiante</a>'
                            ;
                        }
                ?>


                </div>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Matriculas
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Matricular Estudiante</a>
                    <a class="dropdown-item" href="#">Listar Matriculas</a>
                    <a class="dropdown-item" href="#">Ver Matriculas Estudiante</a>
                    <a class="dropdown-item" href="#">Actualizar Matriculas Estudiante</a>
                    <a class="dropdown-item" href="#">Eliminar Matricula</a>
                    <a class="dropdown-item" href="#">Estadisticas de Matricula</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" onclick="acercaDe()">Acerca de ....</a>
            </li>


        </ul>
    </nav>








    <script src="https://kit.fontawesome.com/ce4c312a95.js" crossorigin="anonymous"></script>

</body>

</html>