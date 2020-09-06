<?php
    include '../includes/menu_layout.php';
    include 'config/routes.php.php';


    

?>
    <div class="cont-tb">
        <table class="table table-dark table-striped mt8">
        <thead>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Documeto  Identificacion</th>
                <th>Genero</th>
                <th>Eps</th>
                <th>Direccion</th>
                <th>correo</th>
                <th>telefono</th> 
            </tr>
        </thead>
        <tbody>

                <?php for ($i=0; $i <count($estudiantes['Estudiante']) ; $i++) { 
                    echo '<tr>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['nombres'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['apellidos'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['fechaNacimiento'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['documentoIdentificacion'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['genero'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['eps'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['direccion'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['correo'].'</td>'.
                    '<td>'.$estudiantes['Estudiante'][$i]['telefono'].'</td>'
                    .'</tr>';
                } ?>
            
            
        </tbody>
        
    </table>
    </div>
<br><br><br><br>
