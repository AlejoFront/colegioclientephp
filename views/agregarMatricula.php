<?php
    echo "<title> Matricular Estudiante | Servicio Web Rest</title>";
    include '../includes/menu_layout.php';
    include '../config/routes.php';
    $validate = false;
    if(isset($_POST['btnbuscar'])){
            $validate = true;
            $document = trim($_POST['documento']);
            $parametro = "=".$document;
            $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametro),true);


    }
    
?>

            <h2 class="title">Matricular Estudiante</h2>
    <div class="cont-tb">


        <form method = 'POST' class="mt8 formbusquedaest">
            <div class="form-group">
                <label for="pwd">Documento del estudiante:</label>
                <?php 
                    if($validate == true){
                        echo '<br>';
                        echo '<b>'.'El documento que busco fue el: '.$document.'</b>';
                        echo '<br>';
                    }
                ?>
                <div class="contform">
                    <input type="text" class="form-control" name="documento" id="documento">
                    <input type="submit" value="Buscar" class="btn btn-success" name="btnbuscar" id="btnbuscar">
                </div>
            </div>
        </form>
                   <?php 
                        if($validate == true){
                            if($buscarestudiantes == null){
                                echo '
                                <div class="alert alert-danger" alert-dismissible fade show" role="alert">
                                    <strong>Losiento!</strong> Estudiante No encontrado.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>    
                                    ';
                            }else{

                                echo '                               
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Correcto!</strong> Estudiante encontrado.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    ';
                            }
                        }
                    
                    ?>
        <table class="table table-dark table-striped ">
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>correo</th>
                <th>Matricular</th> 
            </tr>
        </thead>
        <tbody>

        <?php
                if($validate == true){
                    echo '<tr>'.
                    '<td>'.$buscarestudiantes['nombres'].'</td>'.
                    '<td>'.$buscarestudiantes['apellidos'].'</td>'.
                    '<td>'.$buscarestudiantes['correo'].'</td>'.
                    '<td>'.'
                        <center>
                        <form method="post">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                            <i class="fas fa-plus-square"></i>
                            </button>
                        </form>
                        </center>
                    '.'</td>'
                    .'</tr>';
                }

        ?>
            
            
        </tbody>
        
    </table>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Ver matriculas del estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="grado">Grado:</label>
                                <div class="contform">
                                <select class="form-control" id="grado">
                                    <option value="0">Seleccione el grado</option>
                                    <option value="12">Todos los grados</option>
                                    <option value="1">Grado 1</option>
                                    <option value="2">Grado 2</option>
                                    <option value="3">Grado 3</option>
                                    <option value="4">Grado 4</option>
                                    <option value="5">Grado 5</option>
                                    <option value="6">Grado 6</option>
                                    <option value="7">Grado 7</option>
                                    <option value="8">Grado 8</option>
                                    <option value="9">Grado 9</option>
                                    <option value="10">Grado 10</option>
                                    <option value="11">Grado 11</option>
                                </select>
                                <button type="button" class="btn btn-primary" name="btnsearch" id="btnsearch"><i class="fas fa-search"></i></button>
                                </div>
                            </div>

                            <div class="fech">
                                <div class="form-group formiz">
                                    <label for="dat1">Fecha Inicio:</label>
                                    <input type="date" name="fechinicio" id="fechinicio" class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label for="dat2">Fecha final:</label>
                                    <input type="date" name="fechfinal" id="fechfinal" class="form-control">
                                </div> 
                            </div>

                            <button type="button" class="btn btn-success" name="matricular" id="matricular"><i class="fas fa-plus"> Matricular</i></button>
                        </form>
                        
                        <table class="table table-dark table-striped mt8">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Materia</th>
                                        <th>Nota</th>
                                        <th>Fecha Inscripcion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha FInal</th>
                                        <th>Estado</th>
                                        <th>correo</th>
                                        <th>telefono</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if(isset($_POST['btnsearch'])){
                                        
                                    }

                                ?>
                                </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </div>

                </div>
            </div>
    </div>

<br><br><br><br>
<?php include '../includes/footer_layout.php';?>