<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/favicon.ico">

	<title>Oshana | Booking</title>

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
		<h1>Bookings</h1>
		<h2>Oshana Transfers and Tours</h2>
		<hr>
	  </div>
	</div>

	<div class="container">
	  <div id="about-us" class="row">
   
		<div class="col-md-6">
		
<?php
if (isset($_POST['submit']) && $submit = $_POST['submit']) {

	$from = 'From: Oshana Website';
	$to = 'oshanat@iway.na';
	$subject = 'New email from website';

	$name = $_POST['name'];
	$message = $_POST['message'];
	$email = $_POST['email'];
	$contactnumber = $_POST['contactnumber'];
	$body = "From: $name\n  Contact Number: $contactnumber \n E-Mail: $email \n";

	// tour
	if ($submit  == 'tour') {
		$people = $_POST['people'];
		$tourpackage = $_POST['tourpackage'];
		$body.= "Number of People: $people \n Tour Package: $tourpackage \n";
	} elseif ($submit == 'transfer') {
		// transfer
		$pickup = $_POST['pickup'];
		$dropoff = $_POST['dropoff'];
		$arrivaldate = $_POST['arrivaldate'];
		$departuredate = $_POST['departuredate'];
		$flightnumber = $_POST['flightnumber'];
		$people = $_POST['people'];
		$body .= "Pick Up From: $pickup \n Drop off At: $dropoff \n Arrival Date: $arrivaldate \n Departure Date: $departuredate \n Flight Number: $flightnumber \n No. Of Persons: $people \n";
	} elseif($submit == "chauffer") {
		$pickup = $_POST['pickup'];
		$pickuptime = $_POST['pickuptime'];
		$dropoff = $_POST['dropoff'];
		$pickuptime = $_POST['pickuptime'];
		$vehicle = $_POST['vehicle'];
		$body .= "Pick Up From: $pickup \n Pick Up Time: $pickuptime \n Drop off At: $dropoff \n Drop Up Time: $pickuptime \n Type of Vehicle: $vehicle \n";
	}

	$body .= "Message:\n $message";

	if (mail($to, $subject, $body, $from)) {
		echo '<p style="color: #fff; background: #0D2C4E; padding: 10px;">Message Sent Successfully!</p>';
	} else {
		echo '<p style="color: #fff; background: red; padding: 10px;">Information Missing Please Recheck</p>';
	}

}
?>

			<!-- Nav tabs -->
			<ul id="new-tab" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#tour-contact" role="tab" data-toggle="tab">Tour</a></li>
				<li role="presentation"><a href="#transfer-contact" role="tab" data-toggle="tab">Transfer</a></li>
				<li role="presentation"><a href="#chauffer-contact" role="tab" data-toggle="tab">Chauffer</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tour-contact">
					<form role="form" method="post" action="booking.php">

						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Name">
						</div>
						
						<div class="form-group">
							<label>Contact Number</label>
							<input type="tel" class="form-control" name="contactnumber" placeholder="Contact Number">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>

						<div class="form-group">
							<label>Date of Tour</label>
							<input type="date" name="date" class="form-control" placeholder="Date of Tour">
						</div>
						<div class="form-group">
							<label>No. Of Persons</label>
							<input type="number" name="people" class="form-control" placeholder="Number Of People">
						</div>
						<div class="form-group">
							<label>Type of Tour</label>
							<select class="form-control" name="tourpackage">
								<option>9 Day Northern Guided Tour</option>
								<option>10 Day Southern Guided Tour</option>
								<option>15 Day Namibia Discovery Guided Tour</option>
								<option>9 Day Southern Self Drive Tour</option>
								<option>10 Day Northern Self Drive Tour</option>
								<option>15 Day Spectacular Namibia Self Drive Tour</option>
								<option>Etosha Shuttle</option>
								<option>Sossuvlei Shuttle</option>
							</select>
						</div>

						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" rows="3" type="textarea" name="message"></textarea>
						</div>

						<button type="submit" class="btn btn-default" name="submit" value="tour">Submit</button>
						<!-- Submit -->
					</form>
				</div>
				<!-- first tab -->


			  <!-- Transfer -->
				<div role="tabpanel" class="tab-pane" id="transfer-contact">
					<form role="form" method="post" action="booking.php">

						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Name">
						</div>

						<div class="form-group">
							<label>Contact Number</label>
							<input type="tel" class="form-control" name="contactnumber" placeholder="Contact Number">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email">
						</div>

						<div class="form-group">
							<label>Pick Up From</label>
							<input type="text" name="pickup">
						</div>

						<div class="form-group">
							<label>Drop off At</label>
							<input type="text" name="dropoff">
						</div>

						<div class="form-group">
							<label>Arrival Date</label>
							<input type="date" name="arrivaldate">
						</div>

						<div class="form-group">
							<label>Departure Date</label>
							<input type="date" name="departuredate">
						</div>

						<div class="form-group">
							<label>Flight Number</label>
							<input type="text" name="flightnumber">
						</div>

						<div class="form-group">
							<label>No. Of Persons</label>
							<input type="number" name="people">
						</div>

						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" rows="3" type="textarea" name="message"></textarea>
						</div>

						<button type="submit" class="btn btn-default" name="submit" value="transfer">Submit</button>
						<!-- Submit -->
					</form>

				</div>
				<!-- second tab -->


			  <!-- Chauffer -->
			  <div role="tabpanel" class="tab-pane" id="chauffer-contact">
					<form role="form" method="post" action="booking.php">
						<div class="form-group">
							<label>Your Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Name">
						</div>

						<div class="form-group">
							<label>Contact Number</label>
							<input type="tel" class="form-control" name="contactnumber" placeholder="Contact Number">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email">
						</div>

						<div class="form-group">
							<label>Pick Up From</label>
							<input type="text" name="pickup">
						</div>

						<div class="form-group">
							<label>Pick Up Time</label>
							<input type="time" name="pickuptime">
						</div>
						<div class="form-group">
							<label>Drop off At</label>
							<input type="text" name="dropoff">
						</div>

						<div class="form-group">
							<label>Drop Up Time</label>
							<input type="time" name="pickuptime">
						</div>

						<div class="form-group">
							<label>Type of Vehicle</label>
							<select class="form-control" name="vehicle">
								<option>Sedan</option>
								<option>Fortuner</option>
								<option>Mercedez Benz</option>
								<option>VW T5 Kombi</option>
							</select>
						</div>

						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" rows="3" type="textarea" name="message"></textarea>
						</div>

						<button type="submit" class="btn btn-default" name="submit" value="chauffer">Submit</button>
						<!-- Submit -->
					</form>
				</div>
				<!-- third tab -->

			</div>
		 	<!-- tab content -->
		</div>
		<!-- column 6 -->

		<div class="col-md-6">
		  <img src="img/mosa.jpg">
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
