<?php

// data base connection from backend php to mysql database
$conn = mysqli_connect("localhost", "root", "", "all-inkl-employee");

$employee_id = $_POST['employee_id'];
$employee_name = $_POST['employee_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];




$sql =  "INSERT INTO `list`(`employee_id`, `employee_name`, `phone`, `address`) VALUES ('$employee_id','$employee_name','$phone','$address')";

$insert = mysqli_query($conn,$sql);

if (!$insert){
    echo "Error";
} else{
    header("Location: /ALL-INKL"); 
}
?>