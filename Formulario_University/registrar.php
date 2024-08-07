<?php

include ("con_db.php");

if(isset($_POST['Registrar'])){
   if(   strlen($_POST['Nombre'])       >=1 &&
         strlen($_POST['Apellido'])     >=1 &&
         strlen($_POST['Correo'])       >=1 && 
         strlen($_POST['Telefono'])     >=1 &&
         strlen($_POST['Ciudad'])       >=1 && 
         strlen($_POST['Direccion'])    >=1  ){
                $Nombre = $_POST['Nombre'];
                $Apellido = $_POST['Apellido'];
                $Correo = $_POST['Correo'];
                $Telefono = $_POST['Telefono'];
                $Ciudad = $_POST['Ciudad'];
                $Direccion = $_POST['Direccion'];
               
               
                $consulta ="INSERT INTO clientesuniversity(Nombre, Apellido, Correo, Telefono, Ciudad, Direccion) VALUES
                ('$Nombre','$Apellido','$Correo','$Telefono','$Ciudad','$Direccion')";

                $resultado = mysqli_query($conex,$consulta);
              if($resultado){
                     ?>
                     echo '<script> window.location.href="gracias.php";</script>';
                     <?php
                     }else{
                            ?>
                            <?php
                     }
              }else{
                     ?>
                     <?php


              }


         }



?>