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
              <li class="active"><a href="contactUs.php">CONTACT</a></li>
              <li><a href="donate.html">DONATE</a></li>
              <li><a href="aboutUs.html">ABOUT US</a></li>
              <li><a href="feedback.php">FEEDBACK</a></li>
            </ul> 
          </div>
        </div>
       </div>
    </div> 
    <br />
    <br />
    <div class="container">
<iframe width="1020" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.np/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hariharbhawan,+Lalitpur,+Central+Region&amp;aq=0&amp;oq=Hariharbhawan,+Lalitpur&amp;sll=27.70896,85.326133&amp;sspn=0.079939,0.131836&amp;ie=UTF8&amp;hq=&amp;hnear=Hariharbhawan,+Sanepa,+Patan,+Bagmati,+Central+Region&amp;t=m&amp;ll=27.681096,85.315533&amp;spn=0.030403,0.087547&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.np/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Hariharbhawan,+Lalitpur,+Central+Region&amp;aq=0&amp;oq=Hariharbhawan,+Lalitpur&amp;sll=27.70896,85.326133&amp;sspn=0.079939,0.131836&amp;ie=UTF8&amp;hq=&amp;hnear=Hariharbhawan,+Sanepa,+Patan,+Bagmati,+Central+Region&amp;t=m&amp;ll=27.681096,85.315533&amp;spn=0.030403,0.087547&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>

<table class="table">
  <tr>
    <td class="pull-right">
        <br />
        <br />
        <address>
  <strong>Spark Children Home</strong><br><br>
  Hariharbhawan, Lalitpur <br>
P.O Box: 285, Patan Dhoka <br>
Phone: <br>
Hirakaji Maharjan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :: 977-9851088667<br>
Mangal Ram Dangol&nbsp; :: 977-9841695360<br>
Ashes Dangol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :: 977-9840065728<br>
  
  <!--<abbr title="Phone">Phone:</abbr> (123) 456-7890-->
</address>
 
<address>
  <strong>Email</strong><br>
  <a href="mailto:#">spark.chhome@gmail.com</a>
</address>
    </td>

    <td>
        <form id="feedback" action="contactUs.php" method="post">
  <fieldset>
    <legend>Contact Us</legend>

    <?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ashesdangol@hotmail.com";
    $email_subject = "Mail from Spark Children";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['your_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['your_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['subject']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>











    
    <br />
    <p>
      <input type="text" name="your_name" placeholder="Your Name">
    </p>

    <p>
      <input type="text" name="email" placeholder="Your email">
    </p>
    <p>
      <input type="text" name="subject" placeholder="Subject">
    </p>
  
    <p>
      <textarea rows="4" name="comments" cols="700" placeholder="Your Message here"></textarea>
    </p>
    
    <button type="submit" value="Submit" class="btn">Submit</button>
  </fieldset>
</form>  


    </td>

  </tr>
  
</table>

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