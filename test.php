<?php  
session_start();
if (!isset($_SESSION['access_token'])) {
	header('Location: vista-empleado.php');
	exit();
}
   $con = new mysqli('localhost', 'root','' ,'proyecto');
   if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
   }
    $radio = $_POST['tipo'];
    $id =  $_SESSION['id'];
	$query = "UPDATE google_users SET rol = '$radio' where clint_id = $id";
	mysqli_query($con,$query); 

	if($radio==Coordinador) {
		header('Location: vista-admin.php');
		exit();
	} else {
		header('Location: vista-empleado.php');
		exit();
	}	
?>