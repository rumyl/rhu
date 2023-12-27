<?php
require_once "includes/metaheader.php";
require_once "includes/header.php";
require_once "config/master.php";

?>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Patient Information Management <br>System RHU</h2>
			<p>We offer a wide range of medical services for
				your health.</p>
		</div>
		<div class="jumbotron-right">
			<form action="" class="jumbotron-form" id="dataForm">

					<h3>Book Now</h3><br>
					<p>We provide great services and products.</p>
					<input type="text" id="appointment_date" onblur="checkDateValidity()"   min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"  placeholder="Consultation Date" onfocus="(this.type='date')" >
					<select id= "appointment_time">
						<option>Please Select Time</option>
					</select>
					<input type="text"  id="email" placeholder="Email" onblur="checkEmail()" autocomplete = "off">
					<input type="text"  id="lname" placeholder="Last Name" autocomplete = "off">
					<input type="text"  id="fname" placeholder="First Name" autocomplete = "off">
					<input type="text"  id="mname" placeholder="Middle Name" autocomplete = "off">
					<input type="text"  id="dob" placeholder="Date of Birth"  max="<?php echo date('Y-m-d', strtotime('-1 day')); ?>" onfocus="(this.type='date')" autocomplete = "off">
					<select id="gender">
						<option selected="selected">Gender</option>
						<option value ="Male">Male</option>
						<option value ="Female">Female</option>
					</select>
					<button type="button" id = "btn-save" class="rates">Book Consultation</button>
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
	<script src="js/email.min.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>
	<script>

		function generateRandomCode() {
			const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			let code = '';

			for (let i = 0; i < 6; i++) {
				const randomIndex = Math.floor(Math.random() * characters.length);
				code += characters.charAt(randomIndex);
			}

			return code;
		}

		var code = generateRandomCode();

		function checkDateValidity() {
			var datePicker = document.getElementById('appointment_date');
			var selectedDate = datePicker.value;

			var currentDate = new Date();
			var inputDate = new Date(selectedDate);

			if(!isNaN(inputDate.getTime()) && inputDate >= currentDate) {

				console.log("Selected date is valid: " + selectedDate);
				getTime();

			}else{
				
				alert("Invalid date. Please select a date from the current date onwards.");
				datePicker.value = currentDate.toISOString().slice(0, 10);
				getTime();
			}
		}
		
		function getTime() {

			$(document).ready(function() {

				var appointment_date = $("#appointment_date").val();
				$.ajax({
                        url: "get_time.php",
                        method: "GET",
                        data: { appointment_date: appointment_date },
                        dataType: "json",
                        success: function(response) {
                            
                            $("#appointment_time").html(response);
                            
                        }
                });
			});
		}


		function isValidEmail(email) {
			const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			
			return emailRegex.test(email);
		}


		function checkEmail() {

			var email = document.getElementById('email').value;
			
			if (isValidEmail(email)) {
				//alert('Email is valid.');
			} else {
				alert('Email is not valid.');
			}
			
		}


		

		emailjs.init("wVg3d4jAxmEO6cB3l");
		
        function sendEmail() {
            var email = document.getElementById('email').value;
            var from_name = "RHU";
            

            emailjs.send("service_ldqt4wa", "template_7o2dmsb", {
                to_email: email, 
                from_name: from_name,
                message: code
            })
            .then(response => {
                console.log('Email sent:', response);
                //alert('Email sent successfully!');
            })
            .catch(error => {
                console.error('Error sending email:', error);
                //alert('Error sending email. Please try again.');
            });
        }


		function saveData() {
    
			var email = document.getElementById('email').value;
			
			if (isValidEmail(email)) {
				
					var formData = {
					appointment_date: $("#appointment_date").val(),
					appointment_time: $("#appointment_time").val(),
					email: 	$("#email").val(),
					lname: 	$("#lname").val(),
					fname: 	$("#fname").val(),
					mname: 	$("#mname").val(),
					dob: 	$("#dob").val(),
					gender: $("#gender").val(),
					code: code
				};

				$.ajax({
					type: "POST",
					url: "save_appointment2.php", 
					data: formData,
					success: function(response) {
							//alert(response);
							getValidation(response);

					}
				});
			} else {
				alert('Email is not valid.');
			}
			
		}

		function getValidation(user_id) {
    
			$.ajax({
				type: "GET",
				url: "get_validation.php", 
				data: { user_id: user_id },
				success: function(response) {
					$("#dataForm").html(response);
				}
			});
		}

		// Save Online Appointment
        $(document).on("click", "#btn-save", function() {
			
			sendEmail();
			saveData();

        });

		// Verify Email
		$(document).on("click", "#btn-verify", function() {
			
			var verification_code = $("#verification_code").val();
			
			$.ajax({
				type: "GET",
				url: "check_validation.php", 
				data: { verification_code: verification_code },
				success: function(response) {
					if(response == 1){
						$("#dataForm").html("<h3>Congratulations!</h3><br\><p>You have successfully verified an email address, we will sent an email if your appointment has been book. Thank You!</p><br\><a href='home'><button type=\"button\"  class=\"rates\">Okay&nbsp;&nbsp;&nbsp;</button></a>");
					}else{
						alert("Incorrect code!");
					}
				}
			});

        });
		
	</script>
	
<?php

require_once "includes/footer.php";

?>