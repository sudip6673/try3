<!DOCTYPE html>
<html>
<head>
	<title>Total Product</title>
</head>
<body>
	<center>
	<a href="<?php echo base_url();?>Welcome/logout"> Log_out</a>
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