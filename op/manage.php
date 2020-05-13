	<?php 
		include('connection.php');
		$sql="select * from persons";
		$res=mysqli_query($con,$sql);
					
				?>
				  <?php if(isset($_GET['msz'])){
		echo	$_GET['msz']; 
		}
		?>
	<table class="table table-hover">
       <tr>
	   <th><h4><b>Id</b></h4></th>
		    <th><h4><b>NAME</b></h4></th>
		    <th><h4><b>ACTION</b></h4></th>
        </tr>
 	    <?php while($data=mysqli_fetch_array($res))  {
			?>
			 <tr>
			<td><?php echo  $data['id']  ?></td>
		    <th><?php echo  $data['first_name']  ?></th>
			<th><a href="edit.php?eid=<?php echo $data['id']  ?>"/><span class="label label-success">edit</span></a> &nbsp;&nbsp;
			<a href="view.php?vid=<?php echo $data['id']  ?>"/><span class="label label-success">view</span></a> &nbsp;&nbsp;
			<a href="delete.php?did=<?php echo $data['id'] ?>"span class="label label-danger">Delete</span></a></th>
        </tr> 
        <?php  } ?>
	</table> 