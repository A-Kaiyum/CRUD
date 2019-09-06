<?php
session_start();
include 'DBconnection.php';

$id = base64_decode($_GET['id']);

$delete = "DELETE FROM member where id ='$id'";
$data_delete = $connet->query($delete);
/*
if($data_delete="true")
{
	$_SESSION(['message2'])="Data is successfully Deleted !";
}
else
$_SESSION(['message2'])= "Can not delete !";

*/

header("Location:index.php");

?>