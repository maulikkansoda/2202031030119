<?php

$obj = new mysqli("localhost","root","","phpdb");

$result = $obj->query("select * from sample");

?>

<table border="1" align="center" cellpadding="10" cellspacing="0">
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Contact</td>
		<td>Delete</td>
	</tr>
	<?php
	while($row = $result->fetch_object())
	{
		?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->email;?></td>
			<td><?php echo $row->contact;?></td>
			<td><a href="delete1.php?delid=<?php echo $row->id;?>">delete</a></td>
		</tr>
		<?php
	}
	?>
</table>