<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>
<body>
 
    <div class="header">
        <a href="#default" class="logo">TravelZimbabwe.com</a>
        <div class="header-right">
        <a href="index.php">Home</a>
          <a href="faq.php">FAQ</a>
          <a href="contact.php" class="active">Contact</a>
        </div>
        </div>

        <div class="container actionfeedback">
            <?php
                echo "<h1>Thank you ". $_GET['name'] . " for your message. Our team will get back to you in 3 working days.</h1>"
            ?>
        </div>

<footer>
    <div class="footer-content">
        <h3>Travel Zimbabwe</h3>
        <p>Love traveling? Choose From our wide range of opportunities which TravelZimbabwe.com offers. Find what you need with one easy search and save 10%. Best Price Guarantee!! Discover, plan and book your perfect trip with expert advice and travel guides.
        </p>
    </div>
   
    <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
     </ul>
     
     </div>
</footer>

<script src="index.js"></script>

</body>
</html>