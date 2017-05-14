<?php


     

      if (!empty($_POST ['fname']) && ($_POST ['Country']) && ($_POST ['ycomment'])){
      $con=mysqli_connect("localhost","root","password","sparkChildrenHome");


// Check connection
if (mysqli_connect_errno())
  {
  echo "fail" . mysqli_connect_error();
  }

//'$_POST[ycountry]'
 date_default_timezone_set('UTC');
 $myTime=date('jS F Y h:i:s A', time()+20700);
 


$sql="INSERT INTO feedbacks (NAME, COUNTRY, FEEDBACK,Time)
VALUES ('$_POST[fname]','$_POST[Country]','$_POST[ycomment]','$myTime')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_close($con);
echo "success";
      
      
      
    }else{
   echo "fail";
 }




?>