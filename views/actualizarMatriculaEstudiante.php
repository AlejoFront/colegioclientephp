<?php
    echo "<title> Actualizar Matriculas | Servicio Web Rest</title>";
    include '../includes/menu_layout.php';
    include '../config/routes.php';
    $validate = false;
    $validview = false;
    $validsr = false;
    $validup = false;
    $document = "";
    $cdmt = "";
    if(isset($_POST['btnbuscar'])){
            $validate = true;
            $document = trim($_POST['documento']);
            $parametro = "=".$document;
            $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametro),true);
    }

    if(isset($_POST['btnver'])){
        $validview = true;
        $document = trim($_POST['pcedula']);
        $parametro = "=".$document;
        $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametro),true);
    }

    if(isset($_POST['btnsearch'])){
        $validsr = true;
        $document = trim($_POST['ppcedula']);
        $idgrado = trim($_POST['gradoselect']);
        $parametro = "=".$document."&grado=".$idgrado;
        $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametro),true);
        $buscarmatrigradoest = json_decode(file_get_contents($ip.$proyecto.$url_matr_est_grado.$parametro),true);
    }

    if(isset($_POST['btnupdate'])){
        $validup = true;
        $cdmt = trim($_GET['idmat']);
    }
    
?>

            <h2 class="title">Actualizar Matricula Estudiante por documento</h2>
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
                            <?php
                                if($validate == true || $validview == true || $validsr == true){
                                    echo '
                                        <input type="text" class="form-control" name="documento" id="documento" value="'.$document.'">
                                        ';
                                }else{
                                    echo '
                                        <input type="text" class="form-control" name="documento" id="documento" value"estaesto">
                                    ';
                                }
                            ?>
                            <input type="submit" value="Buscar" class="btn btn-success" name="btnbuscar" id="btnbuscar">
                        </div>
                    </div>
                </form>
                   <?php 
                        if($validate == true){
                            if($buscarestudiantes == null){
                                echo '
                                <div class="alert alert-danger" alert-dismissible fade show" role="alert">
                                    <strong>Lo siento!</strong> Estudiante No encontrado.
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
                <th>Ver Matriculas</th>
                
            </tr>
        </thead>
        <tbody>

        <?php
                if($validate == true && $buscarestudiantes != null){
                    echo '<tr>'.
                    '<td>'.$buscarestudiantes['nombres'].'</td>'.
                    '<td>'.$buscarestudiantes['apellidos'].'</td>'.
                    '<td>'.$buscarestudiantes['correo'].'</td>'.
                    '<td>'.'
                        <center>
                        <form method="POST">
                            <input type="text" name="pcedula" id="pcedula" style="display:none;" value="'.$document.'">
                            <input type="submit"  class="btn btn-primary fas fa-eye" value="ver" name="btnver" id="btnver">
                        </form>
                        </center>
                    '.'</td>'
                    .'</tr>';
                }

                if($validview == true && $buscarestudiantes != null){
                    echo '<tr>'.
                    '<td>'.$buscarestudiantes['nombres'].'</td>'.
                    '<td>'.$buscarestudiantes['apellidos'].'</td>'.
                    '<td>'.$buscarestudiantes['correo'].'</td>'.
                    '<td>'.'
                        <center>
                        <form method="POST">
                        <input type="text" name="pcedula" id="pcedula" style="display:none;"  value="'.$document.'">
                            <input type="submit"  class="btn btn-primary fas fa-eye" value="ver" name="btnver" id="btnver">
                        </form>
                        </center>
                    '.'</td>'
                    .'</tr>';
                }

                if($validsr == true && $buscarestudiantes !=null){
                    echo '<tr>'.
                    '<td>'.$buscarestudiantes['nombres'].'</td>'.
                    '<td>'.$buscarestudiantes['apellidos'].'</td>'.
                    '<td>'.$buscarestudiantes['correo'].'</td>'.
                    '<td>'.'
                        <center>
                        <form method="POST">
                            <input type="text" name="pcedula" id="pcedula"  style="display:none;" value="'.$document.'">
                            <input type="submit"  class="btn btn-primary fas fa-eye" value="ver" name="btnver" id="btnver">
                        </form>
                        </center>
                    '.'</td>'
                    .'</tr>';
                }
        ?>

            
        </tbody>
        
    </table>
            <?php
                if(isset($_POST['btnver'])){
                    echo '

                    <form method="POST">
                        <div class="form-group">
                            <label for="grado">Grado:</label>
                            <div class="contform">
                            <select class="form-control" id="grado" name="gradoselect">
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
                            <input type="text" name="ppcedula" id="ppcedula" style="display:none;" value="'.$document.'">
                            <button type="submit" class="btn btn-primary" name="btnsearch" id="btnsearch"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <table class="table table-dark table-striped ">
                        <thead>
                            <tr>
                                <th>Codigo Matricula</th>
                                <th>Codigo Estudiante</th>
                                <th>Materia</th>
                                <th>Definitiva</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody> 
                            
                        <tbody>   
                    </table>
                    ';
                }

                if($validsr == true){
                    echo '

                    <form method="POST">
                        <div class="form-group">
                            <label for="grado">Grado:</label>
                            <div class="contform">
                            <select class="form-control" id="grado" name="gradoselect">
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
                            <input type="text" name="ppcedula" id="ppcedula" style="display:none;" value="'.$document.'">
                            <button type="submit" class="btn btn-primary" name="btnsearch" id="btnsearch"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    ';
                    echo    '<table class="table table-dark table-striped ">
                                <thead>
                                    <tr>
                                        <th>Codigo Matricula</th>
                                        <th>Codigo Estudiante</th>
                                        <th>Materia</th>
                                        <th>Definitiva</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>'; 
                                    if($buscarmatrigradoest != null){
                                        for($i=0;$i<count($buscarmatrigradoest['Matricula']);$i++){
                                            $cdmatri = $buscarmatrigradoest['Matricula'][$i]['codigo'];
                                            $cdestu = $buscarmatrigradoest['Matricula'][$i]['pkEstudiante'];
                                            echo '<tr>'.
                                            '<td>'.$buscarmatrigradoest['Matricula'][$i]['codigo'].'</td>';
                                            $parametrom = "=".$buscarmatrigradoest['Matricula'][$i]['pkEstudiante'];
                                            $nombest = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametrom),true);
                                            echo '<td>'.$nombest['nombres'].'</td>';

                                            $parametroest = $buscarmatrigradoest['Matricula'][$i]['pkMateria'];
                                            $materia = json_decode(file_get_contents($ip.$proyecto.$url_buscarmateria.$parametroest),true);
                                            echo '<td>'.$materia['nombre'].'</td>'.
                                            '<td>'.$buscarmatrigradoest['Matricula'][$i]['notaDefinitiva'].'</td>';

                                            if ($buscarmatrigradoest['Matricula'][$i]['estado'] == 0)
                                            {
                                                echo '<td>'.'Matriculada'.'</td>';
                                            }
                                            else if ($buscarmatrigradoest['Matricula'][$i]['estado'] == 1)
                                            {
                                                echo '<td>'.'Cursando'.'</td>';
                                            }
                                            else if ($buscarmatrigradoest['Matricula'][$i]['estado'] == 2)
                                            {
                                                echo '<td>'.'Rerpobada'.'</td>';
                                            }
                                            else if ($buscarmatrigradoest['Matricula'][$i]['estado'] == 3)
                                            {
                                                echo '<td>'.'Aprobada'.'</td>';
                                            }

                                            echo '<td>
                                            <form method ="POST" action="editMatriculaEstudiante.php">
                                                <input type="text" name="idmat" id="idmat" value='.$cdmatri.' style="display:none;">
                                                <input type="text" name="idestu" id="idestu" value='.$cdestu.' style="display:none;">
                                                <button type="submit" class="btn btn-info" name="btnupdate" id="btnupdate" data-toggle="modal" data-target="#myModal"><i class="fas fa-pen-square"></i></button>
                                            </form>
                                                  </td>';

                                            '</td>';
                                        }
                                        echo '                               
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Correcto!</strong> Matricula  encontrada.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                            ';
                                    }else{
                                        echo '
                                        <div class="alert alert-danger" alert-dismissible fade show" role="alert">
                                            <strong>Lo siento!</strong> Matricula No encontrado.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>    
                                            ';
                                    }
                    echo        '<tbody>   
                            </table>';
                    
                }
            ?>


                        

    </div>

<br><br><br><br>
<?php include '../includes/footer_layout.php';?>