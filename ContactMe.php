<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/WebsiteCSS.css">
    <title>Adam's Website</title>
    <meta charset="UTF-8">
    <meta content="author: Adam-Mitro">
  </head>
  <body id="contactBody">
    <div class="bg-contact">
      <a href="Index.php">
        <div id="homeButton"class="borders"></div>
      </a>
      <h1 id="hiddenSuccess"></h1>
      <div class="contact-container glow borders">
        <div class="top-contact">
          <h1>Contact Me</h1>
        </div>
        <div class="bottom-contact">
          <form class="input-contact" method="post">
            Name: <input type="text" name="name" size="15" id="name"><br><br>
            Email: <input type="text" name="email" size="15" id="email"><br><br>
            Phone#: <input type="text" name="phone" size="15" id="phone"><br><br>
            Notes: <input type="text" name="note" size="25" class="text-box" id="note"><br><br>
            <input type="button" name="button" value="Send!" class="button-click" onclick="">
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.1.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>