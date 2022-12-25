<?php
    $email = $_POST['email'];
    $username = $_POST['username'];
	$password = $_POST['password'];
	$account_type = "user";
	$confirm_password = $_POST['confirm_password'];

    include 'connectDB.php';
	
	if(strlen($username) < 6){
	
		echo "Minimum username length is 6.";
		echo "<br><br>";
	}


	if(strlen($password) < 4){
	
		echo "Minimum password length is 4.";
		echo "<br><br>";


	}

	if($password != $confirm_password){
	
		echo "Password does not match. Re-enter your password.";
		echo "<br>";
	}

	else{
        #register here	
        $password_encrypted = md5($password);
        
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert([
                'username' => $username, 
                'password' => $password_encrypted, 
                'email' => $email, 
                'role' => $account_type
            ],
        );
        $result = $conn->executeBulkWrite($userdb, $bulk);
        if($result)
            {
                echo '<script> alert("Data Updated"); </script>';
                header("Location:../php/home.php");
            }
            else
            {
                echo '<script> alert("Data Not Updated"); </script>';
            }
    }
?>