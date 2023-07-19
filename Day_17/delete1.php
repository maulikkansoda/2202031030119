<?php

$obj = new mysqli("localhost","root","","phpdb");

$id = $_GET["delid"];

$exe = $obj->query("delete from sample where id='$id'");

if($exe)
{
	header('location:delete.php');
}
else
{
	echo "Error In Delete Code";
}

?>