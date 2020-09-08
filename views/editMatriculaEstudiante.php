<?php

echo "<title> Actualizar Matriculas | Servicio Web Rest</title>";
include '../includes/menu_layout.php';
include '../config/routes.php';
$cdmat = "";
$cdest = "";
if(isset($_POST['btnupdate'])){
    $cdmat = trim($_POST['idmat']);
    $cdest = trim($_POST['idestu']);

        $parametroest = "=".$cdest;
        $parametromat = "=".$cdmat;
        $buscarestudiantes = json_decode(file_get_contents($ip.$proyecto.$url_buscarestudiante.$parametroest),true);
        $buscarmateria =json_decode(file_get_contents($ip.$proyecto.$url_buscarmateria.$parametromat),true);
        $matr_est_grado = json_decode(file_get_contents($ip.$proyecto.$url_mtr_est.$parametromat),true);       
}


if(isset($_POST['btnupmtr'])){
    $pmatricula = trim($_POST['cod']);
    $pdefinitiva = trim($_POST['definitiva']);
    $pest = trim($_POST['est']);

    //$uptade_matricula_est = json_encode(file_put_contents($ip.$proyecto.$url_update_mtr_est,),true);

}



?>
<h2 class="title">Actualizar Matricula Estudiante por documento</h2>

<div class="contformsadd">

<form method="POST">
        <div class="form-group">
            <label for="nombre">Codigo Matricula:</label>
            <input type="text" class="form-control" id="cod" name="cod" disabled value="<?php echo $cdmat; ?>">
        </div>
        <div class="form-group">
            <label for="apellido">Codigo Estudiante:</label>
            <input type="text" class="form-control" id="codes" name="codes" disabled value="<?php echo $cdest; ?>">
        </div>

        <div class="form-group">
            <label for="correo">Materia:</label>
            <input type="text" class="form-control" id="materia" name="materia" disabled value="<?php echo $buscarmateria['nombre']; ?>">
        </div>

        <div class="form-group">
            <label for="documento">Definitiva:</label>
            <input type="text" class="form-control" placeholder="Digita tu documento" id="definitiva" name="definitiva" value="<?php echo $matr_est_grado['notaDefinitiva']; ?>">
        </div>

        <div class="form-group">
            <label for="genero">Estado:</label>
            <select class="form-control" id="est" name="est">
                <?php 

                    if($matr_est_grado['estado'] == 0){
                        echo '<option value="0" selected>Matriculada</option>';
                    }else if($matr_est_grado['estado'] == 1){
                        echo '<option value="1" selected>Cursando</option>';
                    }else if($matr_est_grado['estado'] == 2){
                        echo '<option value="2" selected>Rerpobada</option>';
                    }else if($matr_est_grado['estado'] == 3){
                        echo '<option value="3" selected>Aprobada</option>';
                    }
                ?>
            </select>
        </div>
        <div class="contbtn">
            <button type="submit" name="btnupmtr" id="btnupmtr" class="btn btn-primary">Guardar Estudiante</button>
        </div>
    </form> 

</div>











<?php include '../includes/footer_layout.php';?>