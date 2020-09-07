<?php
    echo "<title> Actualizar Matriculas | Servicio Web Rest</title>";
    include '../includes/menu_layout.php';
    include '../config/routes.php';
    $validate = false;
    $validview = false;
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
    
?>

            <h2 class="title">Actualizar Matricula </h2>
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
                <th>Ver Matriculas</th> 
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
                        <form method="POST">
                            <input type="text" name="pcedula" id="pcedula" style="display:none;" value="'.$document.'">
                            <input type="submit"  class="btn btn-primary fas fa-eye" value="ver" name="btnver" id="btnver">
                        </form>
                        </center>
                    '.'</td>'
                    .'</tr>';
                }

                if($validview == true){
                    echo '<tr>'.
                    '<td>'.$buscarestudiantes['nombres'].'</td>'.
                    '<td>'.$buscarestudiantes['apellidos'].'</td>'.
                    '<td>'.$buscarestudiantes['correo'].'</td>'.
                    '<td>'.'
                        <center>
                        <form method="POST">
                            
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
                    </form>

                    <table class="table table-dark table-striped ">
                        <thead>
                            <tr>
                                <th>Codigo Matricula</th>
                                <th>Codigo Estudiante</th>
                                <th>Materia</th>
                                <th>Definitiva</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody> 
                            
                        <tbody>   
                    </table>
                    ';
                }
            ?>

                        

    </div>

<br><br><br><br>
<?php include '../includes/footer_layout.php';?>