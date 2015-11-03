<?php

			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    	?> <script type="text/javascript">
		    		alert("error al subir el archivo");
		    	</script> <?php
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../imagenes/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../imagenes/" .$random.'_'.$_FILES["file"]["name"]);
		      		//esta es la ubicacion donde queda guardaada la img/echo "Archivo guardado en " . "../productos/" .$random.'_'. $_FILES["file"]["name"];
		      		
		      		echo "<script>alert('El registro ha sido guardado con exito')</script>";
		      	}
		      	///////
		    }
	 }
	 else{
		 	echo "<script>alert('Formato no Soportado')</script>";
		  }

class Verificar_datos_profesor
	{
			
       		function Consul_profesor($cedula,$nombres,$apellidos,$genero,$telefono,$celular,$email,$area,$imagen)
		{	 		  	
	         	include ('../Datos/class.Profesor.php');
                        $clase=new Profesor;
                        $clase->Nuevo_profesor($cedula,$nombres,$apellidos,$genero,$telefono,$celular,$email,$area,$imagen);

                        header("Location: ../buscar_profesor.php?");	
		}	
	}

$clase=new Verificar_datos_profesor;
$clase->Consul_profesor($_POST["cedula"],$_POST["nombres"],$_POST["apellidos"],$_POST["genero"],
						$_POST["telefono"],$_POST["celular"],$_POST["email"],$_POST["area"],$imagen);

?>