<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        .contact-bar {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top:5px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height="200px";
            z-index: 1000;
        }

        .contact-info {
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Your Student Management System content goes here -->

<?php
// Contact information
$email = "bruktics@gmail.com";
$phone = "09-79-09-79-34";
?>

<div class="contact-bar">
    <p class="contact-info">For any inquiries, contact us at: <?php echo $email; ?> | Phone: <?php echo $phone; ?></p>
</div>

</body>
</html>
