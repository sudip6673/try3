<!DOCTYPE html>
<html>
<head>
	<title>Log in </title>
</head>
<body>
<form action="<?php echo base_url();?>Welcome/inputc" method="post">
	<center>
    <table>
    	<tr>
    		<td>
    			-: Enter the User Id :-
    		</td>
    		
    	</tr>
    	<tr>
             <td>
    			<input type="text" name="user">
    		</td>
    	</tr>
    	<tr>
    		<td>
    			-: Enter the Password :-
    		</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="password" name="pass">
    		</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="submit" value="Submit" >
    		</td>
    	</tr>
        
    </table>
</center>
</form>
</body>
</html>