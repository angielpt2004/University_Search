<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Formulario de registro</title>
		<link rel="shortcurt icon" href="image/logoa.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

  <?php
    
    $inc = include("con_db.php");
        if($inc){
            $consulta = "SELECT * FROM clientesuniversity";
            $resultado = mysqli_query($conex, $consulta);
            ?>
            <table>
                <thead>
                    <caption> Datos Clientes University </caption>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
            <?php 
            
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id = $row['id'];
                $Nombre = $row['nombre'];
                $Apellido =  $row['apellido'];
                $Correo =  $row['correo'];
                $Telefono =  $row['telefono'];
                $Ciudad =  $row['ciudad'];
                $Direccion =  $row['direccion'];
            ?>

            <tr>
                <td> <?php echo $id; ?> </td>
                <td> <?php echo $Nombre; ?> </td>
                <td> <?php echo $Apellido; ?> </td>
                <td> <?php echo $Correo; ?> </td>
                <td> <?php echo $Telefono; ?> </td>
                <td> <?php echo $Ciudad; ?> </td>
                <td> <?php echo $Direccion; ?> </td>
            </tr>

            <?php 
             
            }
        }

    }

    ?>
    </table>

  </body>
</html>