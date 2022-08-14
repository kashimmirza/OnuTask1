
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
    if(isset($_POST['create'])){
        
        $firstname =$_POST['firstname'];
         $lastname =$_POST['lastname'];
         $phonenumber =$_POST['phonenumber'];
         $email =$_POST['email'];
         $Address =$_POST['Address'];
         $sql = "INSERT INTO phonebooktable(firstname, lastname, phonenumber, email, Address) VALUES(?,?,?,?,?) ";
        $stminsert = $db->prepare($sql);
        $result = $stminsert->execute([$firstname, $lastname, $phonenumber,$email,$Address]);
         if($result){
             echo "success";
         }
        else{
            echo 'there is error';
        }
    }
	
	?>	
</div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                
                        <h1>Registration</h1>
                        <p>Fill up the form</p>
                        <lablel for="firstname"><b>First Name</b></lablel>
                        <input type="text" name="firstname" required>
                        <lablel for="lastname"><b>Last Name</b></lablel>
                        <input type="text" name="lastname" required>
                        <lablel for="phonenumber"><b>phone no</b></lablel>
                        <input type="text" name="phonenumber" required>
                        <lablel for="email"><b>email</b></lablel>
                        <input type="email" name="email" required>
                         <lablel for="Address"><b>Address</b></lablel>
                         <input type="text" name="Address" required>
                         <input type="submit" name="create">
                    
                
                
            </div>
        </form>
    </div>


	

</body>
</html>