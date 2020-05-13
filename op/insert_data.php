<?php
   include('connection.php');

   if(!empty($_POST['first_name'])){
    // Escape user inputs for security

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];

    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

    if(mysqli_query($con, $sql)){

        $response =  "Records added successfully.";

    } else{

        $response =  "ERROR: Could saved data" ; 

    }
	
     header('Location: manage.php?msz='.$response);
	}else{
		$response = 'please fill form';
		 header('Location: index.php?msz='.$response);
	}
  
    ?>

