<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'C:\xampp\htdocs\responsive-portfolio-website-master\responsive-portfolio-website-master\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\responsive-portfolio-website-master\responsive-portfolio-website-master\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\responsive-portfolio-website-master\responsive-portfolio-website-master\PHPMailer\src\SMTP.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $subject = sanitize_input($_POST["subject"]);
    $message = sanitize_input($_POST["message"]);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Message saved to the database

        // Send email
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Specify your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'hyperprabhat@gmail.com'; // Your SMTP username
            $mail->Password = 'kdkm ezun favl ztjo'; // Your SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('your_email@gmail.com', 'Your Name'); // Sender email and name
            $mail->addAddress($email, $name); // Recipient email and name

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Thank you for your message';
            $mail->Body = "
<html>
<head>
    <style>
        /* Your CSS styles here */
        .container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .details {
            margin-bottom: 10px;
        }
        .details p {
            margin: 5px 0;
            color: #333;
        }
        .details p strong {
            color: #ff6b6b;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .contact-info i {
            margin-right: 10px;
        }
        .social-icons a {
            color: #3b5998; /* Facebook blue */
            text-decoration: none;
            margin-right: 10px;
        }
        .social-icons a:hover {
            color: #C13584; /* Facebook hover color */
        }
        .social-icons a.instagram {
            color: #E1306C; /* Instagram pink */
        }
        .social-icons a.instagram:hover {
            color: #8a3ab9; /* Instagram hover color */
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Thank you for contacting us!</h1>
        <div class='details'>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
        </div>
        <p>We have received your message and will get back to you shortly.</p>
        <div class='contact-info'>
            <p><i class='fas fa-envelope'></i> Contact us at: hyperprabhat@gmail.com</p>
            <p><i class='fas fa-phone'></i> Call us at: +977-9819853254</p>
            <p>
                <a href='https://www.facebook.com/hyperlord2223/'><i class='fab fa-facebook'></i></a>
                <a href='https://www.instagram.com/prabhat_dgaf/' class='instagram'><i class='fab fa-instagram'></i></a>
                <!-- Add more social media icons here -->
            </p>
        </div>
    </div>
</body>
</html>
";

            // Send email
            $mail->send();
            echo '<div style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 0 auto; text-align: center;">';
            echo '<h2 style="font-size: 24px; color: #333; margin-bottom: 20px;">A confirmation email has been sent to your email address.</h2>';
            echo '</div>';
        } catch (Exception $e) {
            echo '<p>Message could not be sent. Mailer Error: ', $mail->ErrorInfo, '</p>';
        }
    } else {
        echo '<p>Message could not be saved to the database. Error: ' . $conn->error . '</p>';
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

?>
