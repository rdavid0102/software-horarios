<?php

	class Horarios
	{
		protected $nom_horario;
		protected $id_horario;
		protected $resultado;

		public function __construct($nom_horario, $id_horario)
		{
			$this->nom=$nom_horario;
			$this->id=@$id_horario;

		}
		public function Consultar_horario()
		{	 	
				include ('./Datos/conexion.php');	
	         	$re=mysqli_query($con, "SELECT * FROM horarios")or die(mysqli_error());
	         	$this->resultado = mysqli_num_rows($re);
	         	return $this->resultado;
                mysqli_close($con);
		}
			
       	public function Consultar_nom_horario()
		{	 	
				include ('../Datos/conexion.php');	
	         	$re=mysqli_query($con, "SELECT * FROM horarios WHERE nom_horario = "."'$this->nom'")or die(mysqli_error());
	         	$this->resultado = mysqli_num_rows($re);
	         	return $this->resultado;
                mysqli_close($con);
		}

			public function Consultar_id_horario()
		{	 	
				include ('../Datos/conexion.php');	
	         	$re=mysqli_query($con, "SELECT * FROM horarios WHERE nom_horario = "."'$this->nom'")or die(mysqli_error());
	         	$f=mysqli_fetch_array($re);
	         	$this->resultado = $f['id_horario'];
	         	return $this->resultado;
                mysqli_close($con);
		}
		public function Consultar_nom_horario_nom()
		{	 	
				include ('../Datos/conexion.php');	
	         	$re=mysqli_query($con, "SELECT * FROM horarios WHERE id_horario = "."'$this->id'")or die(mysqli_error());
	         	$f=mysqli_fetch_array($re);
	         	$this->resultado = $f['nom_horario'];
	         	return $this->resultado;
                mysqli_close($con);
		}

		public function Nuevo_horario()
		{
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO horarios (nom_horario) VALUES ('$this->nom')")or die(mysqli_error());
			mysqli_close($con); 
			

		}

		public function Modificar_horario()
		{
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE horarios SET nom_horario='$this->nom' WHERE id_horario=".$this->id) or die(mysqli_error());
			mysqli_close($con); 
			

		}
		public function Eliminar_horario()
		{
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM horarios WHERE id_horario=".$this->id);
			mysqli_close($con); 
			

		}
		public function Cargar_horarios()
		{	 	
				include ('../Datos/conexion.php');	
	         	$re=mysqli_query($con, "SELECT * FROM horarios")or die(mysqli_error());
	         	$this->resultado = mysqli_num_rows($re);
	         		if ($this->resultado!=0){

						while ($f=mysqli_fetch_array($re)) {
							$vector[]=array('id_horario'=>$f['id_horario'],'nom_horario'=>$f['nom_horario']);
						}
						return $vector;
					}
	        
                mysqli_close($con);
		}
		public function Iniciar_horario()
		{	 	
				session_start();
				unset($_SESSION['Horario']);
				include ('../Datos/conexion.php');		
				$re=mysqli_query($con, "SELECT * FROM horarios WHERE id_horario ='".$this->id."'")or die(mysqli_error());
				while ($f=mysqli_fetch_array($re)) {
					$arreglo[]=array('id_horario'=>$f['id_horario'],
							'nom_horario'=>$f['nom_horario']);
						$_SESSION['Horario']=$arreglo;
				}
		}




	}

?>