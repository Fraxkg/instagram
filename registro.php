 <?php 
	session_start();
 	include_once('db/DB.php');
 	$pdo = new PDO('mysql:host=localhost;dbname=instagram', 'root', 'root');

	if(isset($_POST['email'])){
		/*$email = $_POST['email'];
	
		$nombre=  $_POST["nombre"];
		$apePat=  $_POST['apePat'];
		$apeMat=  $_POST['apeMat'];
		*/
		$confPass=  $_POST['pass2'];
		$password = $_POST['password'];

		if($password===$confPass){
			
			$datas = [
    'idUsuario' => NULL,
    'nombre' => $_POST["nombre"],
    'apePat' => $_POST['apePat'],
    'apeMat' => $_POST['apeMat'],
    'biografia' => NULL,
    'website' => NULL,
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'imgPerfil' => NULL
];

	//$data = "'".$_POST["nombre"].",".$_POST['apePat'].",".$_POST['apeMat'].",NULL,".",NULL".$_POST['password'].",".$_POST['email'].",NULL'";
	
	//$data implode (array $datas.", ");


	echo implode(', ',array_values($datas));

	

		$sql ="INSERT INTO usuarios (idUsuario, nombre, apePat, apeMat, biografia, website, email, password, imgPerfil) 
							VALUES(". implode(', ',array_values($datas)) .")";

			
			//NULL,nombre,apePat,apeMat,'dddd',NULL,email,password,'BBBBB'
			
	
 
		$stmt= $pdo->prepare($sql);
		$stmt->execute($datas);
		
		

		//header('location:feed.php');


		}
		else{
			header('location:index.php?error=1');
		}
	}
  ?>