<?php

$obj = new mysqli("localhost","root","","soudb");

if(isset($_POST['submit']))
{
	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
	$Contact = $_POST['Contact'];

	//Table Store
	$exe = $obj->query("insert into form (Fullname,Email,Contact) values('$Fullname','$Email','$Contact')");

	if($exe)
	{
		echo "Record Inserted Successfully!";
	}
	else
	{
		echo "Error In Code!";
	}
	
}

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<form method="POST">
 	<table border = "1" align= "center" cellspacing="0" cellpadding="5">

 	<tr>
 		<td>
 		   Fullname:
 		</td>
 		<td>
 	       <input type = "text" id="Fulllname" name="Fullname">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   Email:
 		</td>
 		<td>
 	       <input type = "text" id="Email" name="Email">
 		</td>
 	</tr>

    <tr>
 		<td>
 		   contact:
 		</td>
 		<td>
 	       <input type = "text" id="Contact" name="Contact">
 		</td>
 	</tr>

 	<tr>
        <td colspan="2" align="center">
        	<input type ="submit" id="submit" name="submit" value="Submit">
        </td>
    </tr>
    
</table>
</form>
</body>
</html>