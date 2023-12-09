<?php
require_once "includes/metaheader.php";
require_once "includes/header.php";
?>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Patient Information Management <br>System RHU</h2>
			<p>We offer a wide range of medical services for
				your health.</p>
		</div>
		<div class="jumbotron-right">
			<form action="" class="jumbotron-form" method="post">
				<!-- Put the form here -->
					<h3>Book Now</h3><br>
					<p>We provide great services and products.</p>
					<label class="hide" for="arrival">arrival date</label>
					<input type="text"  name="consulation_date" placeholder="Consultation Date" onfocus="(this.type='date')" ><br>
					<input type="text"  name="lname" placeholder="Last Name"><br>
					<input type="text"  name="fname" placeholder="First Name"><br>
					<input type="text"  name="mname" placeholder="Middle Name"><br>
					<input type="text"  name="dob" placeholder="Date of Birth" onfocus="(this.type='date')"><br>
					<select name="gender">
						<option selected="selected">Gender</option>
						<option value ="Male">Male</option>
						<option value ="Female">Female</option>
					</select><br>
					<button type="button" class="rates">Book Consultation</button>
			</form>
		</div>
	</div>
	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Services and Treatment</h2>
			<hr class="horizontal">
			<p>We provide stable supply of top quality pharmaceutical products & devices addressing diverse medical needs.</p>
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img width="50px" src="./assets/img/pharma.svg" alt="clock icon" class="enjoy__clock-icon">
					</span>
					<h3>PHARMACEUTICALS</h3>
					<p>We distribute quality medicines from different suppliers.</p>
			</div>
			<div class="lower">
				<span>
					<img width="50px" src="./assets/img/lab.svg" alt="fitness icon" class="enjoy__fitness-icon">
				</span>
				<h3>LABORATORY</h3>
				<p>We distribute different categories of Laboratory Chemicals.</p>
			</div>
			
		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img width="50px" src="./assets/img/medical.svg" alt="coffee icon" class="enjoy__coffee-icon">
					</span>
						<h3>MEDICAL SUPPLIES</h3>
					<p>Different categories of standard medical equipments in our list.</p>
				</div>
				<div class="lower">
					<span>
						<img width="50px" src="./assets/img/radiology.svg" alt="wifi icon" class="enjoy__wifi-icon">
					</span>
						<h3>Radiology</h3>
						<p>Full range of general and special radiological procedures on both outpatient and in-patient.</p>
				</div>
		</div>
	</div>

	</div>
	<section class="special-offers">
		<!-- Top Text -->
		
	
<?php

require_once "includes/footer.php";

?>