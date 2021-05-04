<?php 
    $conexion=mysqli_connect('localhost','root','','expediente_medico');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrar Datos</title>
    </head>
    <body>
        
        <br>

        <table border="1">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>apellido paterno</td>
                <td>apellido materno</td>
                <td>telefono</td>
                <td>email</td>
                <td>fecha de nacimiento</td>
                <td>sexo</td>
                <td>nacionalidad</td>  
            </tr>

            <?php 
                $sql ="SELECT * from t_personas";
                $result=mysqli_query($conexion,$sql);

                while ($mostrar=mysqli_fetch_array($result)) {
                    # code...
                
            ?>
            <tr>
                <td><?php echo $mostrar ['id']?></td>
                <td><?php echo $mostrar ['nombre']?></td>
                <td><?php echo $mostrar ['apellido_paterno']?></td>
                <td><?php echo $mostrar ['apellido_materno']?></td>
                <td><?php echo $mostrar ['telefono']?></td>
                <td><?php echo $mostrar ['email']?></td>
                <td><?php echo $mostrar ['fecha_nacimiento']?></td>
                <td><?php echo $mostrar ['sexo']?></td>
                <td><?php echo $mostrar ['nacionalidad']?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>