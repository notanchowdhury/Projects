<?php
include 'header.php';
include 'database.php';
include 'config.php';

?>
<h1>Insert New blood fighter's information.</h1>

		<?php
		$db = new Database();
		if(isset($_POST['submit'])){
			
			$name = mysqli_real_escape_string($db->link, $_POST['Name']);
			$Email = mysqli_real_escape_string($db->link,$_POST['Email']);
			$grp =  mysqli_real_escape_string($db->link,$_POST['grp']);
			$mobile = mysqli_real_escape_string($db->link,$_POST['mobile']);
		if($name== ''||$Email== ''||$grp== ''||$mobile== ''){
			$error ="Please Fill up all field";
		}
		else {
			$query="INSERT INTO info_table(Name, Email, grp, mobile) values('$name','$Email','$grp','$mobile')" ;
			$create = $db->insert($query);
			 }
		} 
  ?>
  <?php
	if(isset($error))
	{
		echo "<span style='color:red'>".$error."</span>";
	}
?>	
		
		
		
	<form action="create.php" method="post">
	<table>

	 <tr>
	 <td>Name</td>
	 <td><input type="text" name ="Name" placeholder="please enter your name"/></td>
	</tr>
	<tr>
	 <td>Email</td>
	 <td><input type="text" name ="Email" placeholder="please enter your email"/></td>
	</tr>
	<tr>
	 <td>grp</td>
	 <td><input type="text" name ="grp" placeholder="please enter blood group"/></td>
	</tr>
	<tr>
	 <td>mobile</td>
	 <td><input type="text" name ="mobile" placeholder="please enter your mobile"/></td>
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