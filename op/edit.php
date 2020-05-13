	<?php
        include('connection.php');
		if(isset($_GET['eid']))
		{
		$eid=$_GET['eid'];
		$sql="select * from persons where id='$eid'";
	
		}
	$res=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($res);
		?>

    <form action="update_data.php" method="post">
        <input type='hidden' name='eid' id='name' value='<?php echo $data['id'] ; ?>'/>
        <input class="form-control" value='<?php echo $data['first_name'];?>' required="required" name="first_name" placeholder="Name" type="text">
         <input class="form-control" value='<?php echo $data['last_name'];?>' required="required" name="last_name" placeholder="Phone" type="text">
          <input class="form-control" value='<?php echo $data['email'];?>' required="required" name="email" placeholder="Email" type="text">
         <button type="submit" value="submit" class="btn btn-primary btn-lg">update</button> 
    </form> 