<!DOCTYPE html>
<html>
<head>
	<title>Active Customer</title>
</head>
<body>
	<center>
	<?php
	require_once(APPPATH."views/menu.php");
	?>
</center>
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

</body>
</html>