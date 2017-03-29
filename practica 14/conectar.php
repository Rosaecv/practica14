<?php
//parametros
$hostdb="localhost"; //nombre del servidor
$usuariodb="root";   //nombre del usuario
$clavedb="12345";    //contraseña del usuario
$basededatos="AbarrotesBD"; //nombre de la BD
//Cadena de conexion completa
$cadenaConexion=mysqli_connect("$hostdb","$usuariodb","$clavedb","$basededatos");
?>