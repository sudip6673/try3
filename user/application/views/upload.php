<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
<?php echo form_open_multipart('Welcome/upload');
?>
	<center>
	<table>
		<tr>
			<td>
				Enter the Name 
			</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>
				Enter the subject 
			</td>
			<td>
				<input type="text" name="sub">
			</td>
		</tr>
		<tr align="center">
			<td colspan="2px">
				Upload<input type="file" name="userfile" value="Attachment">
			</td>
		</tr>
		<tr align="center">
			<td colspan="2px">
				<input type="submit" name="" value="Submit">
			</td>
		</tr>
		<tr align="center">
			<td colspan="2px">
				<a href="<?php echo base_url();?>Welcome/viewc">View</a>
			</td>
		</tr>
	</table>
	</center>
<?php 
?>

</body>
</html>