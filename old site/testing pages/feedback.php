<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Children Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner"> 
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-th-list"></span>
          </a>
          <a href="index.html" class="brand">Spark Children Home</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right"> 
              <li><a href="index.html">HOME</a></li>
              <li><a href="sparkKids.html">SPARK KIDS</a></li>
              <li><a href="photoGallery.html">GALLERY</a></li>
              <li><a href="getInvolved.html">GET INVOLVED</a></li>
              <li><a href="contactUs.php">CONTACT</a></li>
              <li><a href="donate.html">DONATE</a></li>
              <li><a href="aboutUs.html">ABOUT US</a></li>
              <li  class="active"><a href="feedback.php">FEEDBACK</a></li>
            </ul> 
          </div>
        </div>
       </div>
    </div> 
<form id="feedback" action="feedback.php" method="post">
  <fieldset>
    <h2 class="muted" align="center">Your Feedback</h2><br>

    <?php

    if(isset($_POST['submit'])){

      if (!empty($_POST ['fname']) && ($_POST ['ycountry']) && ($_POST ['ycomment'])){
      $con=mysqli_connect("127.0.0.1","root","password","sparkChildrenHome");
      date_default_timezone_set('UTC');
      $myTime=date('jS F Y h:i:s A');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO feedbacks (NAME, COUNTRY, FEEDBACK, Time)
VALUES ('$_POST[fname]','$_POST[ycountry]','$_POST[ycomment]',$_POST[$myTime]);
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_close($con);
echo "Thank you for your feedback. Your comment will be posted soon.";
      
      
      
    }else{
   echo "Please fill up all the blanks.";
 }



}
?>

 <br>
 <br>

    <p>
      <input type="text" name='fname' placeholder="Your Name">
    </p>

    <p>
      <input type="text" name='ycountry' placeholder="Your Country">
    </p>
  
    <p>
      <textarea rows="4" cols="700" name='ycomment' placeholder="Your feedback here..."></textarea>
    </p>
    
    <button type="submit" name="submit"class="btn">Submit</button>
  </fieldset>
</form> 

    <br />
    <br />
    <br />
    <table id="feedWidth" class="table-striped">
    <tr><th>Name</th><th>Comments</th></tr>
      <?php

$con=mysqli_connect("127.0.0.1","root","password","sparkChildrenHome");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result=mysqli_query($con, "SELECT * FROM feedbacks WHERE APPROVED = 1");


while($row = mysqli_fetch_array($result))
{
  
  
  echo "<tr><td><span class='commentor'>".$row['NAME']."</span><br>"."[".$row['COUNTRY']."]"."</td>"."<td>".$row['FEEDBACK']."</td></tr>";

  } 
  



mysqli_close($con);


?>
</table>
    <br />
    <br />
    <br />
    <br />
    <div class="colorContainer">
      <div class="row-fluid"> 
        <div class="span4">
        <b><p> Spark Children Home <br />Hariharbhawan, Lalitpur <br />P.O Box: 285, Patan Dhoka <br />Email: spark.chhome@gmail.com</p></b>
        </div>

        <div class="span6"><br /><br /><p>Copyright © Spark Children Home, 2013. All rights reserved.</p>
        </div>

        <div class="span2"> <a href="https://www.facebook.com/pages/Spark-Children-Home/219414931464474" target="_blank"><i class="icon-large icon-facebook"></i></a>
        <a href="http://www.youtube.com/watch?v=d5yEl3voVJ8" target="_blank"><i class="icon-large icon-youtube"></i></a>
        </div>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>