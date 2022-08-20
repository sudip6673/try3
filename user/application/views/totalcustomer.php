<!DOCTYPE html>
<html>
<head>
	<title>Total Customer</title>
</head>
<body>
	<?php
	require_once(APPPATH."views/menu.php");
	?>
	<?php  foreach($all_user as $key=>$row)
	{
		?>
		<center>
<form>
	<table height="200px" width="300px" border="2px">
		<tr>
			<td>
				ID
			</td>
			<td>
				CName
			</td>
			<td>
				Regdate
			</td>
			
		</tr>
		<tr>
			<td>
				<?php echo $row['ID']?>
			</td>
			<td>
				<?php echo $row['cname']?>
			</td>
			<td>
				<?php echo $row['regdate']?>
			</td>
		</tr>
		
	</table>
	<br>
</form>
</center>
<?php
}
?>
<center>
	
</center>
</body>
</html>