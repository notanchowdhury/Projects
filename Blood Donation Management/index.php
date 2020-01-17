<?php
include 'header.php';
include 'database.php';
include 'config.php';

?>

		<?php
		$db = new Database();
         $query = "SELECT * FROM info_table";
		 $read =$db->select($query);
		?>
		<p style="color:black;background:#D6B339;font-size:18px;"><?php echo date("d/m/Y")."<br/>".date("l");?></p>
		<p style="color:red">“Blood Donation Will Cost You Nothing But It Will Save A Life!” “If You're A Blood Donor, You're A Hero To Someone, Somewhere, Who Received Your Gracious Gift Of Life.” “A Life May Depend On A Gesture From You, A Bottle Of Blood.” “The Finest Gesture One Can Make Is To Save Life By Donating Blood.”</p>
		
	<?php
	if(isset($_GET['msg']))
	{
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}
?>	
		
		
				
				<table class="newone" border="2">
				<tr>
                    <th width="20%">serial</th>	
					<th width="20%">Name: </th>	
					<th width="20%">Email </th>	
					<th width="20%">group</th>	
					<th width="20%">mobile</th>
                    <th width="20%">Action</th>					
		      </tr>
			  <?php if($read){?>
			   <?php while($row=$read->fetch_assoc()){?>
		<tr>
				<td><?php echo $row['id'];?></td>
                <td><?php echo $row['Name'];?></td>
				<td><?php echo $row['Email'];?></td>
				<td><?php echo $row['grp'];?></td>
				<td><?php echo $row['mobile'];?></td>
                <td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>				 
				 
				</tr>
			  <?php } ?>
			  <?php } else { 	?> 

			  <p>Data is not available!!</p>
			   <?php } ?>
	</table>
	<a href="create.php">INSERT NEW MEMBER</a>
			<?php include 'footer.php'?>