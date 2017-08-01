<?php
	/*
	* conexion con la base de datos del servidor local
	*/
    $con = mysqli_connect("localhost","root","root","cimacoco_labcal");
    // Check connection
    mysqli_query($con, "SET NAMES 'UTF8'");
    if (mysqli_connect_error())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    //echo 'Conectado satisfactoriamente';
?>

<?php
	/*
	* conexion con la base de datos del servidor http://www.cima-co.com/
	*/
 //    $con = mysqli_connect("localhost","cimacoco_app","cimacoco_app?","cimacoco_labcal");
 //    // Check connection
 //    mysqli_query($con, "SET NAMES 'UTF8'");
 //    if (mysqli_connect_error())
	// {
	// 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }
    //echo 'Conectado satisfactoriamente';
?>