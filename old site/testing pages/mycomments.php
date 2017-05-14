<?php
$con=mysqli_connect("127.0.0.1","root","raiden007","sparkChildrenHome");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "Thank you for your comment"; 
$sql="INSERT INTO feedbacks (NAME, COUNTRY, FEEDBACK)
VALUES ('$_POST[fname]','$_POST[ycountry]','$_POST[ycomment]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_close($con);
?>