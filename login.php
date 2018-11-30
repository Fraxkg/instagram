<?php 
	session_start();

	include_once('db/DB.php');

	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query ="SELECT email,password FROM usuarios where email=:email
		 and password=:password";
		$db = new DB();
		$conn = $db->getConnection();

		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':password',$password);
		//ejecutamos la consulta
		$stmt->execute();
		//obtener arreglo asociativo
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		if($result = $stmt->fetch()){
			echo "AAAAAAAAAAAAAAAAAAAAAAA";
			$_SESSION['user'] = $result['email'];
			header('location:feed.php');
		}else{
			header('location:index.php?error=1');
		}
	}
 ?>

