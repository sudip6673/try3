<!DOCTYPE html>
<html>
<head>
	<title>Active Product</title>
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
				PName
			</td>
			<td>
				Price
			</td>
			<td>
				Mfgdate
			</td>
			<td>
				Expdate
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
				<?php echo $row['pname']?>
			</td>
			<td>
				<?php echo $row['price']?>
			</td>
			<td>
				<?php echo $row['mfgdate']?>
			</td>
			<td>
				<?php echo $row['expdate']?>
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