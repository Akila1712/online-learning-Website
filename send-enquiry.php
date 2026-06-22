<?php

include 'connection.php';

$name   = mysqli_real_escape_string($conn,$_POST['name']);
$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
$email  = mysqli_real_escape_string($conn,$_POST['email']);
$course = mysqli_real_escape_string($conn,$_POST['course']);

$sql = "INSERT INTO online_enquiries(name,mobile,email,course)
VALUES('$name','$mobile','$email','$course')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Enquiry Submitted Successfully');window.location='index.html';</script>";
}
?>