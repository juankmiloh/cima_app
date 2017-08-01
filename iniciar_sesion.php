<?php
	header("access-control-allow-origin: *");
	include ("conexion_BD.php");

	$login = $_POST['text_usuario'];
	$pswd = $_POST['text_contrasena'];

	$pswd_encriptado = md5($pswd);

	$sql="SELECT * FROM sec_labusers WHERE login='".$login."'";
	if (mysqli_query($con,$sql) == true){
		$result=mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result);
		$pswd_bd = $row['pswd'];
		if ($pswd_encriptado==$pswd_bd) {
			echo "Logueado<br>";
		}else{
			echo "Contraseña incorrecta!<br>";
		}
		echo $pswd_encriptado."<br>";
		echo $pswd_bd;
	}else{
		echo $con->error."\nerror: ". $sql . "<br>";
	}
?>