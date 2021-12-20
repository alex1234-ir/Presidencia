<?php

include("cone.php");

$identificador=$_GET['id'];

$sql="DELETE FROM prod WHERE id='$identificador'";
$query=mysqli_query($conexion,$sql);


if($query){
    Header("Location: list.php");
}

?>