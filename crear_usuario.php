<?php
	header("access-control-allow-origin: *");
	include ("conexion_BD.php");

	$login = $_POST['text_usuario'];
	$pswd = $_POST['text_contrasena'];
	$name = $_POST['text_nombre'];
	$email = $_POST['text_email'];
	$active = $_POST['text_activo'];
	$group_id = $_POST['text_grupo'];
	$id_empresa = $_POST['text_empresa'];

	$pswd_encriptado = md5($pswd);

	//echo $n_nombre;

	$sql="INSERT INTO sec_labusers(
					  login, 
					  pswd,
					  name,
					  email,
					  active,
					  activation_code,
					  id_empresa) 
	VALUES('".$login."',
		   '".$pswd_encriptado."',   
		   '".$name."',
		   '".$email."',
		   '".$active."',
		   '".$activation_code."',
		   ".$id_empresa.")";
	if (mysqli_query($con,$sql) == true){
		echo "Registro usuario exitoso!";
		$sql="INSERT INTO sec_labusers_groups(
					  login, 
					  group_id) 
		VALUES('".$login."',
			   ".$group_id.")";
		if (mysqli_query($con,$sql) == true){
			echo "Registro grupo exitoso!";
		}else{
			echo $con->error."\nerror: ". $sql . "<br>";
		}
	}else{
		echo $con->error."\nerror: ". $sql . "<br>";
	}
?>