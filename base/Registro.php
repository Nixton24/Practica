<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Registro Mine</title>
   <!--Link jQuery-->
   <SCRipt src="jQuery.js">
    </SCRipt>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<center>
    <form method="POST">
        <h1>Registro</h1>
        <input type="text" name="Matricula" placeholder="Escriba su matricula">
        <p>Matricula</p>
        <input type="text" name="Nombre" placeholder="Escriba su nombre completo">
        <p>Nombre Completo</p>
        <input type="text" name="Grado" placeholder="Escriba su grado y grupo">
        <p>Grado y grupo</p>
        <input type="text" name="Correo" placeholder="Escriba su correo electronico">
        <p>correo electronico</p>
        <input type="password" name="Contraseña" placeholder="Escriba su contraseña">
        <p>Contraseña</p>
        <textarea name="Mensaje" placeholder="Escribe aqui tu mensaje" ></textarea>
        <p>Mensaje opcional</p>
        <input class="botones"  type="submit" value="Insertar"> <input class="botones" type="submit" value="Buscar">  <input class="botones" type="submit" value="Eliminar" name="eliminardatos">
        
    </center>
    <style>
        body{
            background-image: url(https://i.pinimg.com/originals/82/a8/6e/82a86ecaaaf5e9a876907eb56ce4a218.jpg);
            background-repeat: no-repeat;
        }
        p{
            font-size: 30px;
            color:black;
            font-weight: bolder;
        }
        input{
            font-size: 20px;
            color: black;
            background-size: 20px;
            border-color: darkorange;
            width: 500px;
            margin-top:20px;
        }
        textarea{
            border-color: darkorange;
            font-size: 20px;
            color: black;
            background-size: 20px;
            width: 500px;
            margin-top:20px;
        }
       .botones{
        border-color: darkorange;
        color: black;
        font-size: 20px;
        width: 100px;
       }
       h1{
        font-weight: bolder;
        color: black;
        font-size: 50px;
       }
    </style>
    </form>
       <?php
       error_reporting(0);
       $con=mysqli_connect('localhost','root','','prueba') or die ('mamaste no sirve');
       $sql="INSERT INTO `alumnos` VALUES (NULL,'".$_POST["Matricula"]."', '".$_POST["Nombre"]."', '".$_POST["Grado"]."', '".$_POST["Correo"]."', '".$_POST["Contraseña"]."', '".$_POST["Mensaje"]."' )";
       $resultado=mysqli_query($con, $sql) or die ('te chingas tampoco sirve');
       mysqli_close($con);
       ?>
       
       
    
</body>
</html>