<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio | Servicio Web Rest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Colegio</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="ViewPrincipal.aspx">Principal</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Estudiantes
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Agregar Estudiante</a>
                    <a class="dropdown-item" href="#">Listar Estudiantes</a>
                    <a class="dropdown-item" href="#">Buscar Estudiantes</a>
                    <a class="dropdown-item" href="#">Eliminar Estudiantes</a>
                    <a class="dropdown-item" href="#">Promedio Estudiante</a>
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




    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Ing. Luis Felipe Londoño</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Linkeding</a></li>
                                <li><a href="#">Facebook</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Ing. Alejandro Luna Miranda</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Linkeding</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Empresa</h4>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 220 - Company Artificial-Byte S.A.S</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
</body>

</html>