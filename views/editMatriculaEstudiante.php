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
        $url_buscarmateria =json_decode(file_get_contents($ip.$proyecto.$url_buscarmateria.$parametromat),true);
        
}

//notaDefinitiva

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
            <input type="text" class="form-control" id="materia" name="materia" disabled value="<?php echo $url_buscarmateria['nombre']; ?>">
        </div>

        <div class="form-group">
            <label for="documento">Definitiva:</label>
            <input type="text" class="form-control" placeholder="Digita tu documento" id="definitiva" name="definitiva" value="<?php echo $url_buscarmateria['nombre']; ?>">
        </div>

        <div class="form-group">
            <label for="genero">Estado:</label>
            <select class="form-control" id="sel1">
                <option value="0">Matriculada</option>
                <option value="1">Cursando</option>
                <option value="2">Rerpobada</option>
                <option value="3">Aprobada</option>
            </select>
        </div>
        <div class="contbtn">
            <button type="submit" class="btn btn-primary">Guardar Estudiante</button>
        </div>
    </form> 

</div>











<?php include '../includes/footer_layout.php';?>