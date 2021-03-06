<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/WebsiteCSS.css">
    <title>Adam's Website</title>
    <meta charset="UTF-8">
    <meta content="author: Adam-Mitro">
  </head>
  <body id="body">
    <div class="header" id="paws"></div>
    <div class="header-transparent" id="opac">
      <div class="head-title-div" id="headDiv">
        <h1 class="header-title" id="head">Welcome to my site</h1>
      </div>
      <div class="navigation-bar">
        <a href="index.php" class="body-information-div">
          <p class="yellow-text">Home</p>
        </a>
        <a href="interests.php" id="mid2" class="body-information-div">
          <p class="yellow-text">Interests</p>
        </a>
        <a href="Misc.php" id="mid1" class="body-information-div">
          <p class="yellow-text">Miscellaneous</p>
        </a>
        <a href="sports.php" class="body-information-div">
          <p class="yellow-text">Sports</p>
        </a>
      </div>
    </div>
    <a href="ContactMe.php">
      <div class="yellow-text body-information-div" id="contactMeDiv">
        <p>Contact Me</p>
      </div>
    </a>
    <div id="sideBodyDiv" class="body-information-div">
      <p class="yellow-text">Select one of the color scheme choices.</p>
      <form id="changeColors" method="get" action="">
        <select name="colorDropDown">
          <option value="plain">Plain</option>
          <option value="pitt">Pitt</option>
          <option value="halloween">Halloween</option>
          <option value="christmas">Christmas</option>
        </select> <br> <br>
        <input type="submit" name="color" value="Click to change colors" onclick="changeColorScheme(this.form.colorDropDown.value)">
      </form>
    </div>
    <div id="rightBodyDiv" class="body-information-div">
	    <h2 id="hidden_name" class="yellow-text"></h2>
	    <form id="name" method="get" action="">
		    <p class="yellow-text">What is your first name?</p>
		    <input type="text" size="10" name="fname"> <br> <br>
		    <input type="button" name="color" value="Click!" onclick="placeName(this.form.fname.value)">
	    </form>
    </div>
    <div class="body-information-div" id="bodyDiv">
      <h1 class="yellow-text">About Me</h1>
      <p class="yellow-text">Hello, my name is Adam Mitro and I created this site for my Web Applications class.</p>
      <p class="yellow-text">I am a senior at the University of Pittsburgh and am currently majoring in Computer Science.</p>
      <p class="yellow-text">I am just a cool guy who likes to make cool things with code.</p>
      <p class="yellow-text">Here is a list of programming languages I am familiar with:</p>
      <ul>
        <li class="yellow-text">Java</li>
        <li class="yellow-text">C</li>
        <li class="yellow-text">Python</li>
        <li class="yellow-text">JavaScript</li>
        <li class="yellow-text">PHP</li>
      </ul>
      <div class="yellow-text" id="formHolder">
        <form name="cards" id="cardFrom" method="post">
          <h3>What is the first playing card that comes to mind out of a normal deck of cards?</h3>
          <select name="number">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="Jack">Jack</option>
            <option value="Queen">Queen</option>
            <option value="King">King</option>
            <option value="Ace">Ace</option>
          </select>
          <br><br><br><br><br><br>
          <select name="suit">
            <option value="Hearts">Hearts</option>
            <option value="Diamonds">Diamonds</option>
            <option value="Spades">Spades</option>
            <option value="Clubs">Clubs</option>
          </select>
          <br><br><br><br><br><br>
          <input type="button" name="getCard" value="Send" onclick="setCard(this.form.suit.value, this.form.number.value)">
        </form>
        <div id="cardHolder">
          <div id="cardBack"></div>
          <div id="cardFront"></div>
        </div>
      </div>
    </div>
    <footer id="foot">
      <div class="contact">
        <nav class="contact-bar"></nav>
        <nav class="contact-bar"></nav>
        <nav class="contact-bar">
          <p class="yellow-text">Social Media: </p>
          <a href="https://www.facebook.com/adam.mitro.9">
            <img class="black-border" alt="Facebook" src="Images/facebook.png" height="30" width="30">
          </a>
          <a href="https://www.instagram.com/svadam95/">
            <img class="black-border" alt="Instagram" src="Images/instagram.png" height="30" width="30">
          </a>
          <a href="https://twitter.com/svadam412">
            <img class="black-border" alt="Twitter" src="Images/twitter.png" height="30" width="30">
          </a>
        </nav>
        <nav class="contact-bar"></nav>
        <nav class="contact-bar"></nav>
      </div>
    </footer>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.1.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>