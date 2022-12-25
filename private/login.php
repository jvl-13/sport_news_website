<?php
	//LOGIN LOGIC FUNCTIONS
	session_start();
	//clear the authentication token
	$_SESSION['auth'] = 0;
	//get the username and password input
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//connect to the database
	include 'connectDB.php';

	$filter = ['email' => $email];
	$options = [];

	$query = new MongoDB\Driver\Query($filter, $options);

	$rows = $conn->executeQuery($userdb, $query); // $mongo contains the connection object to MongoDB

    foreach($rows as $r) $result = $r;

    if($result)
    {
        //now check the password with the user input password
        $Account_password = $result->{'password'};

        $Account_username = $result->{'username'};

        if($Account_password != md5($password))
        {
            //if the password is incorrect output an error
            echo "Password is wrong.<br>";
            header("Location:../php/login.php?errcode=1"); 
            
        }

        else
        {
            //authenticate and activate login token
            $_SESSION['auth'] = 1;
            //reset the input token
            $_SESSION['HAS_INPUT'] = 0;
            //save the username for future use
            $_SESSION['login-user'] = $Account_username;
            //set the timezone and redirect to the home page
            date_default_timezone_set('Asia/Manila');
            if($result->{'role'}=="user") 
            {
                header("Location:../php/home.php");
            }
            else 
            {
                header("Location:../php/dashboard.php");
            }
        }
    }
    else 
    {
        echo "User does not exist.<br>";
        header("Location:../php/login.php?errcode=1"); 
    }
?>
