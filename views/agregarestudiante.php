<?php
    include '../includes/menu_layout.php';
    include '../config/routes.php';

    
    
?>

<h2 class="title">Agregar Estudainte</h2>

<div class="contformsadd">
    <form method="POST">
        <div class="form-group">
            <label for="nombre">Nombre(s):</label>
            <input type="text" class="form-control" placeholder="Digita tu nombre" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido(s):</label>
            <input type="text" class="form-control" placeholder="Digita tu(s) apellido(s)" id="apellido" name="apellido">
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" class="form-control" placeholder="Digita tu Correo" id="correo" name="correo">
        </div>

        <div class="form-group">
            <label for="documento">documento identificacion:</label>
            <input type="text" class="form-control" placeholder="Digita tu documento" id="documento" name="documento">
        </div>

        <div class="form-group">
            <label for="direccion">direccion :</label>
            <input type="date" class="form-control" placeholder="Digita tu direccion" id="direccion" name="direccion">
        </div>

        <div class="form-group">
            <label for="fechaNacim">Fecha Nacimiento:</label>
            <input type="text" class="form-control" placeholder="Digita tu fechaNacim" id="fechaNacim" name="fechaNacim">
        </div>


        <div class="form-group">
            <label for="eps">eps :</label>
            <input type="text" class="form-control" placeholder="Digita tu eps" id="eps" name="eps">
        </div>

        <div class="form-group">
            <label for="genero">Genero:</label>
            <select class="form-control" id="sel1">
                <option>Selecciona tu genero</option>
                <option value="0">Hombre</option>
                <option value="1">Mujer</option>
            </select>
        </div> 

        <div class="form-group">
            <label for="telefono">Telefono :</label>
            <input type="text" class="form-control" placeholder="Digita tu telefono" id="telefono" name="telefono">
        </div>


        <div class="contbtn">
            <button type="submit" class="btn btn-primary">Guardar Estudiante</button>
        </div>
    </form> 
</div>