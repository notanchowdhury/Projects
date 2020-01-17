<?php
include 'header.php';
include 'database.php';
include 'config.php';

?>
<h1>Update blood fighter's information.</h1>

		<?php
		$id =$_GET['id'];
		$db = new Database();
		  $query = "SELECT * FROM info_table WHERE id=$id";
		 $getData =$db->select($query)->fetch_assoc();
		
		
		if(isset($_POST['submit'])){
			
			$name = mysqli_real_escape_string($db->link, $_POST['Name']);
			$Email = mysqli_real_escape_string($db->link,$_POST['Email']);
			$grp =  mysqli_real_escape_string($db->link,$_POST['grp']);
			$mobile = mysqli_real_escape_string($db->link,$_POST['mobile']);
		if($name== ''||$Email== ''||$grp== ''||$mobile== ''){
			$error ="Please Fill up all field";
		}
		else {
			$query="UPDATE info_table
			SET
			Name ='$name',
			Email ='$Email',
			grp ='$grp',
			mobile = '$mobile'
			WHERE id =$id" ;
			$update= $db->update($query);
			 }
		} 
  ?>
  <?php
	if(isset($error))
	{
		echo "<span style='color:red'>".$error."</span>";
	}
?>	
		
		
		
	<form action="update.php?id=<?php echo $id;?>" method="post">
	<table>

	 <tr>
	 <td>Name</td>
	 <td><input type="text" name ="Name" value="<?php echo $getData['Name'];?> "/></td>
	</tr>
	<tr>
	 <td>Email</td>
	 <td><input type="text" name ="Email" value="<?php echo $getData['Email'];?>"/></td>
	</tr>
	<tr>
	 <td>grp</td>
	 <td><input type="text" name ="grp" value="<?php echo $getData['grp'];?>"/></td>
	</tr>
	<tr>
	 <td>mobile</td>
	 <td><input type="text" name ="mobile" value="<?php echo $getData['mobile'];?>"/></td>
	</tr>
	<tr>
	 <td></td>
	 <td>
	 <input type="submit" name ="submit" value="Submit"/>
	<input type="reset" value="Cancel"/>
	</td>
	</tr>
	
</table>
</form>
<a href="index.php">Go Back</a>
	<?php include 'footer.php'?>