<?php
    echo "<title>Listar Matriculas | Servicio Web Rest</title>";
    include '../includes/menu_layout.php';
    include '../config/routes.php';

?>

    <h2 class="title">Listar Matriculas</h2>
    <div class="cont-tb">
        <table class="table table-dark table-striped mt8">
        <thead>
            <tr>
                <th>Codigo Matricula</th>
                <th>Cod Estudiante</th>
                <th>Materia</th>
                <th>Definitiva</th>
                <th>Fecha de inscripcion</th>
                <th>Fecha inicio</th>
                <th>Fecha Final</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

                <?php 
                    if($listarMatriculas == null){
                        echo '                               
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ups !</strong> Aun no se ha registrado ninguna Matricula!.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            ';
                    }
                    // if(count($listarestudiantes['Estudiante']) > 1){
                
                    //         for ($i=0; $i <count($listarestudiantes['Estudiante']) ; $i++) { 
                    //             echo '<tr>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['nombres'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['apellidos'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['fechaNacimiento'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['documentoIdentificacion'].'</td>';
                    //             if($listarestudiantes['Estudiante'][$i]['genero'] == '0'){
                    //                 echo '<td>'.'Hombre'.'</td>';
                    //             }else{
                    //                 echo '<td>'.'Mujer'.'</td>';
                    //             }
                    //             echo '<td>'.$listarestudiantes['Estudiante'][$i]['eps'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['direccion'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['correo'].'</td>'.
                    //             '<td>'.$listarestudiantes['Estudiante'][$i]['telefono'].'</td>'
                    //             .'</tr>';
                    //         }                
                    // }
                ?>
            
            
        </tbody>
        
    </table>
    </div>
<br><br><br><br>
<?php include '../includes/footer_layout.php';?>