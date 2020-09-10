<?php

echo "<title> Actualizar Matriculas | Servicio Web Rest</title>";
include '../includes/menu_layout.php';
include '../config/routes.php';
$cdmat = "";
$cdest = "";
$cdmateria =0;
$fins = "";
$fini = "";
$fFinal = "";
$validate = false;
$primervalidate = false;

if(isset($_POST['btnupdate'])){
    $primervalidate = true;
    $cdmat = trim($_POST['idmat']);
    $cdmateria = trim($_POST['idmater']);
    $cdest = trim($_POST['idestu']);
    $fechinst = trim($_POST['fechins']);
    $fechini = trim($_POST['fechini']);
    $fechfinal= trim($_POST['fechfinal']);

    $parametroest = "=".$cdest;
    $parametromat = "=".$cdmat;
    $parametromateria = "=".$cdmateria;
    $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametroest),true);
    $buscarmateria =json_decode(file_get_contents($ip.$proyecto.$url_buscarmateria.$parametromateria),true);
    $matr_est_grado = json_decode(file_get_contents($ip.$proyecto.$url_mtr_est.$parametromat),true);

    $fins = $fechinst;
    $fini = $fechini;
    $fFinal = $fechfinal;
        //print_r($matr_est_grado);
}


if(isset($_POST['btnupmtr'])){
    $validate = true;

        $pkmatricula = $_POST['codMatricula'];
        $pdefinitiva = $_POST['definitiva'];
        $pest = $_POST['est'];
        $codestu = trim($_POST['codes']);
        $fechfinal = trim($_POST['fechaFinal']);
        $fechaInicio = trim($_POST['fechaInicio']);
        $fechInscrip = trim($_POST['fechaIns']);
        $codigoMateria = $_POST['ppcomt'];
        $url = $ip.$proyecto.$url_update_mtr_est;
        $curl = curl_init($url);
    $array = [  
        "codigo" => intval($pkmatricula),
        "estado" => intval($pest),
        "fechaFinal" => $fechfinal,
        "fechaInicio" => $fechaInicio,
        "fechaInscripcion" => $fechInscrip,
        "notaDefinitiva" => Doubleval($pdefinitiva),
        "pkEstudiante" => $codestu,
        "pkMateria" => intval($codigoMateria)   
   ];   
   
    
    // 
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($array));
    // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    // $response = curl_exec($curl);
    // $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    

    $require = json_encode($array);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $require);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $respuesta = curl_getinfo($curl,CURLINFO_HTTP_CODE);
    curl_close($curl);

    // echo "->>>>>>>>>>>>>>>>  "."<br>";


    $json = json_encode($array);
    echo $json ;
    // echo "<br>".$codestu."<br>";
    // echo $fechfinal."<br>";
    // echo $fechaInicio."<br>";
    // echo $fechInscrip."<br>";
    // echo $codigoMateria."<br>";
    echo "<br>";
    echo $respuesta;

}



?>
<h2 class="title">Actualizar Matricula Estudiante por documento</h2>

<div class="contformsadd">
    <form method="POST">
        <?php  
            if($validate ==true){
                print_r($array);

                echo '
                    <div class="contbtn">
                        <a href="actualizarMatriculaEstudiante.php" class="btn btn-success"> 
                        Para actualizar otra matricula debes regresar has click aqui</a>
                    </div>
                    <div class="form-group">
                    <label for="nombre">Codigo Matricula:</label>
                    <input type="text" class="form-control" id="codMatricula" name="codMatricula" disabled value="">
                    </div>
                    <div class="form-group">
                        <label for="codigo">Codigo Estudiante:</label>
                        <input type="text" class="form-control" id="codes" name="codes" readonly value="">
                    </div>
                    <div class="form-group">
                        <label for="materia">Materia:</label>
                        <input type="text" class="form-control" id="materia" name="materia" readonly value="">
                    </div>
                    <div class="form-group">
                        <label for="fechains">Fecha Inscripcion:</label>
                        <input type="text" class="form-control" id="fechaIns" name="fechaIns" readonly value="">
                    </div>
            
                    <div class="form-group">
                        <label for="fechini">fecha Inicio:</label>
                        <input type="text" class="form-control" id="fechaInicio" name="fechaInicio" readonly value="">
                    </div>
            
                    <div class="form-group">
                        <label for="fechafin">fecha Final:</label>
                        <input type="text" class="form-control" id="fechaFinal" name="fechaFinal" readonly value="">
                    </div>
            
                    <div class="form-group">
                        <label for="def">Definitiva:</label>
                        <input type="text" class="form-control" id="definitiva" name="definitiva" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="est" name="est" readonly>
                            <option value="">Estado</option>
                            <option value="0">Matriculada</option>
                            <option value="1">Cursando</option>
                            <option value="2">Rerpobada</option>
                            <option value="3">Aprobada</option>
                    </select>
                    <br>  

                </div>
                ';
            }else{
                echo '
                    <div class="form-group">
                        <label for="nombre">Codigo Matricula:</label>
                        <input type="text" class="form-control" id="codMatricula" name="codMatricula" readonly value="';
                        echo $cdmat;
                    echo '"></div>';
                echo '<div class="form-group">
                    <label for="codigo">Codigo Estudiante:</label>
                    <input type="text" class="form-control" id="codes" name="codes" readonly value="'; echo $cdest; echo '">
                </div>';
                echo '<input type="text" class="form-control" id="ppcomt" name="ppcomt" style="display:none;" value="'; echo $buscarmateria['codigo']; echo '">';
                echo '
                <div class="form-group">
                <label for="materia">Materia:</label>
                <input type="text" class="form-control" id="materia" name="materia" readonly value="';echo $buscarmateria['nombre'];
                echo '"></div>';

                echo '<div class="form-group">
                        <label for="fechains">Fecha Inscripcion:</label>
                        <input type="text" class="form-control" id="fechaIns" name="fechaIns" readonly value="';
                        echo $matr_est_grado['fechaInscripcion'];
                        echo '"></div>';

                echo '<div class="form-group">
                        <label for="fechini">fecha Inicio:</label>
                        <input type="text" class="form-control" id="fechaInicio" name="fechaInicio" readonly value="';
                        echo $matr_est_grado['fechaInicio'];
                        echo '"></div>';
            
                echo ' <div class="form-group">
                            <label for="fechafin">fecha Final:</label>
                            <input type="text" class="form-control" id="fechaFinal" name="fechaFinal" readonly value="';
                            echo $matr_est_grado['fechaFinal']; echo '"></div>';

                echo '<div class="form-group">
                        <label for="def">Definitiva:</label>
                        <input type="text" class="form-control" placeholder="Digita la nota" id="definitiva" name="definitiva" value="';
                        echo $matr_est_grado['notaDefinitiva'];
                        echo '"></div>';
                echo '<div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="est" name="est">';
                            if($matr_est_grado['estado'] == 0){
                                echo '  <option value="0" selected>Matriculada</option>
                                        <option value="1">Cursando</option>
                                        <option value="2">Rerpobada</option>
                                        <option value="3">Aprobada</option>';
                            }else if($matr_est_grado['estado'] == 1){
                                echo '  <option value="0">Matriculada</option>
                                        <option value="1" selected>Cursando</option>
                                        <option value="2">Rerpobada</option>
                                        <option value="3">Aprobada</option>
                                    ';
                            }else if($matr_est_grado['estado'] == 2){
                                echo '
                                        <option value="0">Matriculada</option>
                                        <option value="1">Cursando</option>
                                        <option value="2" selected>Rerpobada</option>
                                        <option value="3">Aprobada</option>
                                    ';
                            }else if($matr_est_grado['estado'] == 3){
                                echo '
                                        <option value="0">Matriculada</option>
                                        <option value="1">Cursando</option>
                                        <option value="2">Rerpobada</option>
                                        <option value="3" selected>Aprobada</option>';
                            }
                echo '  </select>
                    </div>';

                echo    '<div class="contbtn">
                            <button type="submit" name="btnupmtr" id="btnupmtr" class="btn btn-primary">Guardar Estudiante</button>
                        </div>';
                
            }
        ?>

    </form> 

</div>











<?php include '../includes/footer_layout.php';?>