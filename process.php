<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$phonenumber	= $_POST['phonenumber'];
	$email	        =$_POST['email'];
	$address 		= $_POST['address'];

		$sql = "INSERT INTO users (firstname, lastname, phonenumber,email,address) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $phonenumber, $email,$address]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}