<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<center>
	<a href="<?php echo base_url();?>Welcome/up"></a>
	<?php foreach($all_user as $key=>$row)
	{
		?>
		<form>
			<table>
				<tr>
					<td>Name</td>
					<td>Subject</td>
					<td>Image</td>
				</tr>
				<tr>
					<td><?php echo $row['Name']?></td>
					<td><?php echo $row['Subject']?></td>
					<td><img src="<?php echo $row['Image']?>" height="200px" width="200px"></td>
					<td><a href="javascript:void()"onclick="if(confirm('Do you want to Delete')){window.location='del/?id=<?php echo $row['ID'];?>';}" class="de" role="button">Delete</a></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</center>
</body>
</html>