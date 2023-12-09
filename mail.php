<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Notification</title>
</head>
<body>
    <form id="emailForm">
        <label for="to_name">To Name:</label>
        <input type="text" id="recipientEmail" name="recipientEmail" required><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>

        <button type="button" onclick="sendEmail()">Send Email</button>
    </form>

    <script src="js/email.min.js"></script>
    <script>
        emailjs.init("hLlST_wMupMSMrePZ");

        function sendEmail() {
            var recipientEmail = document.getElementById('recipientEmail').value;
            var from_name = "RHU";
            var message = document.getElementById('message').value;

            emailjs.send("service_63zaoni", "template_h2uc9m9", {
                to_email: recipientEmail, 
                from_name: from_name,
                message: message
            })
            .then(response => {
                console.log('Email sent:', response);
                alert('Email sent successfully!');
            })
            .catch(error => {
                console.error('Error sending email:', error);
                alert('Error sending email. Please try again.');
            });
        }
    </script>
</body>
</html>
