<?php


class Login
	{
		function Validar_login($email,$password)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios WHERE email="."'$email'"."AND password="."'$password'");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 		     		   
		}

		function Cargar_login($email,$password)
		{	session_start();
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "select * from usuarios where email='".$email."' AND 
 			Password='".$password."'")	or die(mysqli_error());

				while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('nombres'=>$f['nombres'],
				'apellidos'=>$f['apellidos'],'email'=>$f['email'],'genero'=>$f['genero'],'id'=>$f['id_usuario']);
				$_SESSION['Usuario']=$arreglo;
			}
			mysqli_close($con); 		     		   
		}

		function Validar_Nuevo_Usuario()
		{	
			include ('./Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con);		     		   
		}
		function Validar_Email($email)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios where email="."'$email'");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con);		     		   
		}
		function Nuevo_Usuario($id_usuario, $password, $nombres, $apellidos, $genero, $celular, $email)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO usuarios (id_usuario, password, nombres, apellidos, genero, celular, email) VALUES ('$id_usuario', '$password', '$nombres', '$apellidos', '$genero', '$celular', '$email')")or die(mysqli_error());			
			mysqli_close($con); 	     		   
		}
		function Validar_password_usuario($email, $password)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios WHERE email="."'$email'"." and password="."'$password'");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con);		     		   
		}
			function Cambiar_password($email,$password)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE usuarios SET password='$password'
			WHERE email="."'$email'")or die(mysqli_error());		
			mysqli_close($con); 	     		   
		}
		function Datos($email)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios where email="."'$email'");
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('nombres'=>$f['nombres'],
				'apellidos'=>$f['apellidos']);
			}
			return $arreglo;
			mysqli_close($con);		     		   
		}
	}

?>