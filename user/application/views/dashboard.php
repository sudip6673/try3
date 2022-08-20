<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<style>
		body{
			padding: 0px;
			margin:0px;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<form>
	<center>
	<?php
	require_once(APPPATH."views/menu.php");
	?>
</center><center><b>
	<h1>-: Product Details :-</h1><br>
	<a href="<?php echo base_url();?>Welcome/allp"><h1>Total Products <br><?php echo $this->db->count_all('product');?></h1></a>
	<br>
	<a href="<?php echo base_url();?>Welcome/activp"><h1>Active Product :- <?php echo $activep ?></h1></a>
	<br>
	<a href="<?php echo base_url();?>Welcome/inactivp"><h1>Inactive Product :- <?php echo $inactivep?></h1></a>
	<br>
     <h1>-: Customer Details :-</h1><br>
	<a href="<?php echo base_url();?>Welcome/allc"><h1>Total Customers<br><?php echo $this->db->count_all('customer');?></h1></a>
	<br>
<a href="<?php echo base_url();?>Welcome/activc"><h1>Active Customer :- <?php echo $activec?></h1></a>
<br>
<a href="<?php echo base_url();?>Welcome/inactivc"><h1>Inactive Customer :- <?php echo $inactivec?></h1></a>

</b></center>

</form>
</body>
</html>