<?php
session_start();
include 'DBconnection.php';
//$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone =$_POST['phone'];
$status = $_POST['status'];
$gender = $_POST['gender'];




$data = "UPDATE member(`Name`,`Address`,`Phone`,`Status`,`Gender`) SET ('$name','$address','$phone','$status','$gender') WHERE id ='id' ";

$save = $connet->query($data);

if($save="true")
  $_SESSION['message']="<div class='alert alert-success'>Data Insertion Successfull !</div>";
else
  $_SESSION['message']="Data Insertion Failed !";

  header("Location:edit_data.php");








?>