<?php

$obj = new mysqli("localhost","root","","phpdb");

$id=$_GET["taskeditid"];
$result=$obj->query("select * from sample where id='$id'");
$row=$result->fetch_object();

if(isset($_POST['submit']))
{
	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
	$Contact = $_POST['Contact'];

	//Table Store
	$exe = $obj->query("update sample set name='$Fullname',email='$Email',contact='$Contact' where id='$id'");

	if($exe)
	{
		header('location:read.php');
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
 	       <input type = "text" id="Fullname" name="Fullname" value="<?php echo $row->name;?>">
 		</td>
 	</tr>

 	<tr>
 		<td>
 		   Email:
 		</td>
 		<td>
 	       <input type = "text" id="Email" name="Email" value="<?php echo $row->email;?>">
 		</td>
 	</tr>

    <tr>
 		<td>
 		   contact:
 		</td>
 		<td>
 	       <input type = "text" id="Contact" name="Contact" value="<?php echo $row->contact;?>">
 		</td>
 	</tr>

 	<tr>
        <td colspan="2" align="center">
        	<input type ="submit" id="submit" name="submit" value="Update">
        </td>
    </tr>
    
</table>
</form>
</body>
</html>