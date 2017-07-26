<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Oshana | Contact Us</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/oshana.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="custom-header">
    <?php include 'header.php'; ?>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron2">
      <div class="container">
        <h1>Contact Us</h>
        <h2>Oshana Transfers and Tours</h2>
        <hr>
      </div>
    </div>

    <div class="container">
      <div id="contact-us" class="row">
   
        <div class="col-md-6">
          <!-- Contact Form -->
        <?php
           $name = $_POST['name'];
           $email = $_POST['email'];
           $message = $_POST['message'];
           $from = 'From: Oshana Website';
           $to = 'oshanat@iway.na';
           $subject = 'New email from website';

           $body = "From: $name\n E-Mail: $email\n Message:\n $message";

           if ($_POST['submit']) {
               if (mail ($to, $subject, $body, $from)) {
               echo '<p>Message Sent Successfully!</p>';
               } else {
               echo '<p>Ah! Try again, please?</p>';
               }
           }
        ?>
            
        <form id="main-contact" method="post" action="contact.php">
          <label>Your Name:</label>
          <input name="name" type="text" placeholder="Name">
          <label>Your Email:</label>
          <input name="email" type="email" placeholder="Email">
          <label>Your Message:</label>
          <textarea name="message" placeholder="Message"></textarea>
          <input id="submit" name="submit" type="submit" value="Send Email">
        </form>
        </div>
        <div id="details" class="col-md-6">
          <img src="img/contactimg.jpg" style="margin-bottom: 30px;">
          <h4>Our Details</h4>
          <address>
            <span class="glyphicon glyphicon-earphone"></span>Tel: +264 61 224 834<br>
            <span class="glyphicon glyphicon-phone"></span>Cell: +264 81 146 1424<br>
            <span class="glyphicon glyphicon-print"></span>Fax: +264 223 682<br>
            <span class="glyphicon glyphicon-envelope"></span>Email: <a href="mailto:reservations1@oshanatransferandtours.com">reservations1@oshanatransferandtours.com</a>
          </address>
        </div>
      </div>
    </div>

    </div> <!-- /container -->

    <footer>
      <div class="container">
        <div class="col-md-4">
          <h6>About Us</h6>
          <p>
            Oshana Transfer and Tours cc is a Namibian based transport &amp; our operating company ...
          </p>
        </div>
        <div class="col-md-2">
          <h6>Quick Navigation</h6>
          <a href="index.php"><li>Home</li></a>
          <a href="about.php"><li>About Us</li></a>
          <a href="tour.php"><li>Transfers &amp; Tours</li></a>
          <a href="booking.php"><li>Booking</li></a>
          <a href="contact.php"><li>Contact</li></a>
        </div>
        <div class="col-md-3">
          <h6>Contact Us</h6>
          <address>
            <p>
              64 Jenner Street, Windhoek West, Namibia<br>
              P.O. Box 21191, Namibia<br>
              +264 6122 4834<br>
              <a href="oshanat@iway.na">oshanat@iway.na</a>
            </p>
          </address>
        </div>
        <!-- Copyright -->
        <div class="col-md-6">
          <p>&copy; Oshana Transfers and Tours 2014. All Rights Reserved</p>
        </div>
        <div class="col-md-6" style="text-align: right;">
          <p>Powered by Dotcom Holdings</p>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
