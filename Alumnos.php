<?php 

include 'conexion.php'

$nombres = $_POST['Nombres'];
$Apellido = $_POST['Apellidos'];
$Sexo = $_POST['Sexo'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$correo = $_POST['Email'];
$Password = $_POST['Password'];
$year = $_POST['ano'];
$semestre = $_POST['semestre'];

$query = "INSERT INTO almuno(Nombres, Apellidos, Sexo, Direccion, Telefono, Email, Password, ano, semestre) 
            VALUES('$nombres', '$Apellido', '$Sexo', '$Direccion', '$Telefono', '$correo', '$Password', '$year', '$semestre')";

$ejecutar = mysqli_query($conexion, $query);

$ejecutar_select = mysqli_query($conexion, $query_select);
$fila = mysqli_fetch_assoc($ejecutar_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <div>
        <h1>Datos del Alumno</h1>
        <form action="" method="post">
            <label for="Nombres">Nombres:</label>
                <input type="text" id="Nombres" name="Nombres" required><br><br>
            <label for="Apellidos">Apellidos:</label>
                <input type="text" id="Apellidos" name="Apellidos" required><br><br>
            <label>
                <input type="radio" id="Sexo" name="Sexo" value="masculino" required> Masculino
            </label>
            <label>
                <input type="radio" id="Sexo" name="Sexo" value="femenino" required> Femenino
            </label><br><br>
            <label for="Direccion">Dirección:</label>
                <input type="text" id="Direccion" name="Direccion" required><br><br>
            <label for="Telefono">Telefono:</label>
                <input type="text" id="Telefono" name="Telefono" required><br><br>
            <label for="Email">Correo:</label>
                <input type="email" id="Email" name="Email" required><br><br>
            <label for="Password">Contraseña:</label>
                <input type="password" id="Password" name="Password" required><br><br>
            <label for="ano">Año:</label>
                <select id="ano" name="ano" required>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select><br><br>

                <label for="semestre">Semestre:</label>
                <select id="semestre" name="semestre" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select><br><br>
            
            <input type="submit" name="Registrar" id="Registrar" value="Registrar">
            <input type="submit" name="Actualizar" id="Actualizar" value="Actualizar">
            <input type="submit" name="Eliminar" id="Eliminar" value="Eliminar">
            <a href="index.html">Volver</a>

        </form>
    </div>
    
    <div>
        <h2>Buscar Alumnos</h2>
    </div>

    <div>
        <h2>Alumnos Registrados</h2>
    </div>
</body>
</html>