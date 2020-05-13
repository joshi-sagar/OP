<?php
   include('connection.php');

   if(!empty($_POST['first_name'])){
    $id = $_POST['eid'];

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];

     
 	$sql = "UPDATE persons SET first_name='$first_name',last_name='$last_name',email='$email'  WHERE id=$id";
    if(mysqli_query($con, $sql)){

        $response =  "Records updated successfully.";

    } else{

        $response =  "ERROR: Could not updated data. " ; 

    }
     header('Location: manage.php?msz='.$response);
}else{
    $response = 'please fill update form';
     header('Location: edit.php?msz='.$response);
}
 
    ?>

