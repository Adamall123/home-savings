<?php
	require_once "connect.php";
 	session_start();
	$user_loggedin_id =  $_SESSION['id'];
	$income_id=$_GET['id'];
	
	try{
		$connection = new mysqli($host, $db_user,$db_password,$db_name);
		if($connection->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
		}else {
			$sql = "SELECT id FROM incomes_category_assigned_to_users WHERE user_id='$user_loggedin_id' AND name = 'Another'";
			$result = mysqli_query($connection, $sql);  
			$row = mysqli_fetch_array($result);  
			$id_of_another_category = $row['id'];
			
			$connection->query("UPDATE incomes SET income_category_assigned_to_user_id= '$id_of_another_category' WHERE user_id='$user_loggedin_id' AND income_category_assigned_to_user_id= '$income_id'");
			mysqli_query($connection,"DELETE FROM incomes_category_assigned_to_users WHERE user_id='$user_loggedin_id' AND id= '$income_id'");
			$connection->close();
			header('location:settings.php');
		}
	}catch(Exception $e){
		
	}
?>

