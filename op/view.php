	<?php
        include('connection.php');
		if(isset($_GET['vid']))
		{
		$id=$_GET['vid'];
		$sql="select * from persons where id='$id'";
	
		
	$res=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($res);
		?>

   
	<p> <label>first name:</label> <?php echo $data['first_name'];?> </p>
	<p> <label>email:</label> <?php echo $data['email'];?> </p>
	
	<?php
		}
	?>
		