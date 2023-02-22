<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#112734;">
    
    <div class="header">
        <a href="#default" class="logo">TravelZimbabwe.com</a>
        <div class="header-right">
        <a href="index.php">Home</a>
          <a href="faq.php" class="active">FAQ</a>
          <a href="contact.php">Contact</a>
        </div>
        </div>
        

<div class="container">
    <body style="background-color:white;">
    <div style="text-align:center">
      <h2>Travel Quiz</h2>
      <p>Give a try on our fun Travel Zimbabwe quiz and find out how much you know about the country!</p>
    </div>

    <img src="./200w.webp" alt="Paris" class="center">


    <div class="qn-row">
        <div class="qn-img">
            <img src="./f5f74645-2443-4e8f-bc3f-a5e14568f0fb.png" alt="Avatar" style="width:100%">
        </div>
        <div class="qn-content">
            <p>What is one of the seven wonders of the world found in Zimbabwe?</p>

              <input type="radio" id="kariba" name="wonders" value="kariba">
              <label for="kariba">Kariba Dam</label><br>
              <input type="radio" id="victoria" name="wonders" value="victoria">
              <label for="victoria">Victoria Falls</label><br>
              <input type="radio" id="hwange" name="wonders" value="hwange">
              <label for="hwange">Hwange National Park</label>
            <input class="checkAnswerBtn" type="submit" onclick="checkAnswer1()" value="Check Answer">
            <p><span id="fb1" class="gt"></span></p>
        </div>
    </div>

    <div class="qn-row">
        <div class="qn-img">
            <img src="./b50aa395-31ba-40cb-9a71-99dd6e960783.png" alt="Avatar" style="width:100%">
        </div>
        <div class="qn-content">
            <p>Which commercial business has attracted a lot of foreign investors in Zimbabwe?</p>

              <input type="radio" id="health" name="business" value="health">
              <label for="health">Health care</label><br>
              <input type="radio" id="estate" name="business" value="estate">
              <label for="estate">Real estate</label><br>
              <input type="radio" id="car" name="business" value="car">
              <label for="car">Car rental</label>
            <input class="checkAnswerBtn" type="submit" onclick="checkAnswer2()" value="Check Answer">
            <p><span id="fb2"></span></p>
        </div>
    </div>

    <div class="qn-row">
        <div class="qn-img">
            <img src="./8cd22c0c-7b36-4e94-9210-57e570e421cf.png" alt="Avatar" style="width:100%">
        </div>
        <div class="qn-content">
            <p>What is the capital city of Zimbabwe?</p>

              <input type="radio" id="bulawayo" name="city" value="bulawayo">
              <label for="bulawayo">Bulawayo</label><br>
              <input type="radio" id="harare" name="city" value="harare">
              <label for="harare">Harare</label><br>
              <input type="radio" id="mutare" name="city" value="mutare">
              <label for="mutare">Mutare</label>
            <input class="checkAnswerBtn" type="submit"  onclick="checkAnswer3()" value="Check Answer">
            <p><span id="fb3"></span></p>
        </div>
    </div>

    <div class="qn-row">
        <div class="qn-img">
            <img src="./3af32404-1fd7-4265-9324-d4724bd4319e.png" alt="Avatar" style="width:100%">
        </div>
        <div class="qn-content">
            <p>What is the biggest national park in Zimbabwe?</p>

              <input type="radio" id="hwange" name="park" value="hwange">
              <label for="hwange">Hwange National Park</label><br>
              <input type="radio" id="zambezi" name="park" value="zambezi">
              <label for="zambezi">Zambezi National Park</label><br>
              <input type="radio" id="gonarezhou" name="park" value="gonarezhou">
              <label for="gonarezhou">Gonarezhou National Park</label>
            <input class="checkAnswerBtn" type="submit" onclick="checkAnswer4()"value="Check Answer">
            <p><span id="fb4"></span></p>
        </div>
    </div>

    <div class="qn-row">
        <div class="qn-img">
            <img src="./a3c98478-f572-4656-8325-2a10d9d4eb19.png" alt="Avatar" style="width:100%">
        </div>
        <div class="qn-content">
            <p>Which is the major crop grown in Zimbabwe?</p>

              <input type="radio" id="mazie" name="crop" value="maize">
              <label for="maize">Maize</label><br>
              <input type="radio" id="sugar" name="crop" value="sugar">
              <label for="sugar">Sugar cane</label><br>
              <input type="radio" id="wheat" name="crop" value="wheat">
              <label for="wheat">Wheat</label>
            <input class="checkAnswerBtn" type="submit" onclick="checkAnswer5()"value="Check Answer">
            <p><span id="fb5"></span></p>
        </div>
    </div>

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