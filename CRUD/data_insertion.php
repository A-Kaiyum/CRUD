<?php
session_start();
include 'DBconnection.php';

$name = $_POST['name'];
$address = $_POST['address'];
$phone =$_POST['phone'];
$status = $_POST['status'];
$gender = $_POST['gender'];




$data = "INSERT INTO member(`Name`,`Address`,`Phone`,`Status`,`Gender`) VALUES('$name','$address','$phone','$status','$gender')";

$save = $connet->query($data);

if($save="true")
	$_SESSION['message']="<div class='alert alert-success'>Data Insertion Successfull !</div>";
else
	$_SESSION['message']="Data Insertion Failed !";

header("Location:index.php");








?>