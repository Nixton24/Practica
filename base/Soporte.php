<?php
    include("union.php");

    $mat = $_POST["Matricula"];
    $nom = $_POST["Nombre"];
    $gru = $_POST["Grupo"];
    $correo = $_POST["Correo"];
    $contra = $_POST["Contraseña"];
    $comen = $_POST["Mensaje"];
    
    
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
        {
            header("Location: principal.php");
        }
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
        
        {
        $sqlgrabar = "INSERT INTO usuarios(nombre, apellidos, grupo, matricula, corre, pass, comentario, edad) values ('$nom','$ape','$gru','$mat','$correo','$contra','$comen','$edad')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        header("Location: principal.php");
    }else 
    {
        echo "Error: " .$sql."<br>".mysql_error($conn);
    }
            
            
        }
        
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
        
        {
                $sqlmodificar = "UPDATE usuarios SET nombre='$nom', apellidos='$ape', grupo='$gru', corre='$correo', pass='$contra', comentario='$comen', edad='$edad' WHERE matricula=$mat";
    
    if(mysqli_query($conn,$sqlmodificar))
    {
        header("Location: principal.php");
    }else 
    {
        echo "Error: " .$sql."<br>".mysql_error($conn);
    }
            
            
        }
        
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
        
        {
                $sqleliminar = "DELETE FROM alumnos WHERE Matricula=$mat";
    
    if(mysqli_query($conn,$sqleliminar))
    {
        header("Location: union.php");
    }else 
    {
        echo "Error: " .$sql."<br>".mysql_error($conn);
    }
            
            
        }
?>