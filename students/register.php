<?php

include("connec.php");
 

$json = file_get_contents('php://input');

$obj = json_decode($json,true);
 
$StudentID = $obj['StudentID'];
$fname = $obj['FirstName'];
 $lname = $obj['LastName'];
 $dbo = $obj['DateOfBirth'];
 $gender = $obj['Gender'];
 $tell = $obj['ContactNumber'];
 $email=$obj['Email'];
$address = $obj['Address'];
$nationali = $obj['Nationality'];
$status = $obj['AdmissionStatus'];
 
$Sql_Query = "INSERT INTO Students VALUES('$StudentID','$fname','$lname','$dbo','$gender', '$tell','$email','$address','$nationali','$status')";
 
if(mysqli_query($con,$Sql_Query)){
 
  
  $MSG = 'Data Successfully Submitted.' ;
   
  // Converting the message into JSON format.
  $json = json_encode($MSG);
   
  // Echo the message.
   echo $json ;
 
 }
 else{
 
  echo 'Try Again';
 
 }
 mysqli_close($con);
?>