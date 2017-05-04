<?php // <-- Här öppnar vi PHP-taggen.

if (isset($_POST['submit'])) { // Här kollar vi om "Skicka"-knappen är klickad och vad som ska hända efter att den är klickad.

  // Kollar ifall förnamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren.
  if (!$_POST['firstName']) {
    $error = "- Please enter your first name.";
  }

  // Kollar ifall efternamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['lastName']) {
    $error = "<br>- Please enter your last name.";
  }

  // Kollar ifall e-postadressen INTE är ifylld och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['email']) {
    $error .= "<br>- Please enter your email adress.";
  }

  // Kollar ifall meddelandet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['message']) {
    $error .= "<br>- Please enter your message.";
  }

  // Kollar ifall svaret är något annat än 21 och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (intval($_POST['human']) !== 21) {
    $error .= "<br>- Please verify your not a robot.";
  }

  // Här kollar vi ifall det finns några fel och om det finns så skriver vi ut dem åt användaren.
  if ($error) {
    $result = "Oh no! An Error! Please correct the following: $error";
  }

  // Skickar mejlet ifall alla fält är ifyllda och inga fel finns.
  else {

    // PHPs mailfunktion.
    mail(
      "hannes.sjo2@gmail.com", // <-- Adressen dit mejlet skickas
      "Subject line", // <-- Mejlets ämnesrad.
      "Name: " .$_POST['firstName']. // <-- Det användaren har angett som förnamn i formuläret.
      "\r\nEmail: " .$_POST['email']. // <-- Det användaren har angett som e-postadress i formuläret. \r\n gör radbrytningar i själva mejlet.
      "\r\nMessage: " .$_POST['message'] // <-- Det användaren har angett som meddelande i formuläret. \r\n gör radbrytningar i själva mejlet.
    );

    // Texten som visas efter att mejlet skickats.
    {
      $result = "Thank you! We will be in touch shortly.";
    }
  }
}

?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hannes Sjö</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Css.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">
  </head>

  <body>
    <a name="Up"></a>
    <div class="hero">
    <nav class=" div.navbar-fixed-top navbar navbar-toggleable-md navbar-light bg-fadedd">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="color-me" HREF="#Page1">Information<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="color-me2" HREF="#Page2">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="color-me3" HREF="#Page3" >Previous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="color-me4" HREF="#Page4" >Contact me</a>
      </li>
    </ul>
  </div>
</nav>

        <div class="text">
            <h1 class="Header_text">Hannes Sjö</h1>
        </div>
      </div>

      <a class="hover fa fa-arrow-up" href="#Top" aria-hidden="true" id="BTT" title="Go to top"></a>

      <div class="Page1">
      <A NAME="Page1">
      <div/>

      <div class="container">
        <div class="fadiv">
        <i class="fa fa-info" aria-hidden="true"></i>
      </div>
      <div class="">
      <h2><b>Information!</b></h2>
      <p class="Info_text">I am 17 years old male from a little town in Finland called Nykarleby. I've been studying programming at a vocational school Optima.
      I have a passion for programming and gaming. </p>
      </div>


      <A NAME="Page2">
      <div class="strek"></div>

    <div class="Skills">

      <h2 class="h2skills"><b>Skills</b></h2>

      <div class="row">

      <div class="left col-sm-12 col-md-5 ">

        <div class="Fix">

        <div class="HtmlWrap">
        <div class="fadivcode">
        <i class="fa fa-code" aria-hidden="true"></i>
      </div>
      </div>
      <div class="HtmlTextWrap">
      <h2 class="TextHtmlSak">
      <b>HTML</b>
      <h2>
      <p class="Html">Proficient</p>
    </div>
    </div>


    <div class="Fix">

    <div class="HtmlWrap">
    <div class="fadivcode">
    <i class="fa fa-css3 css3" aria-hidden="true"></i>
  </div>
  </div>
  <div class="HtmlTextWrap">
    <h2 class="TextHtmlSak">
    <b>CSS</b>
    <h2>
  <p class="Html">Proficient</p>
</div>
</div>

<div class="Fix">

<div class="HtmlWrap">
<div class="fadivcode">
<p class="php" aria-hidden="true">PHP</p>
</div>
</div>
<div class="HtmlTextWrap">
  <h2 class="TextHtmlSak">
  <b>PHP</b>
  <h2>
<p class="Html">Beginner</p>
</div>
</div>

<div class="Fix">

<div class="HtmlWrap">
<div class="fadivcode">
<p class="php" aria-hidden="true">jQ</p>
</div>
</div>
<div class="HtmlTextWrap">
  <h2 class="TextHtmlSak">
  <b>jQuery</b>
  <h2>
<p class="Html">Beginner</p>
</div>
</div>

      </div>

      <div class="col-md-2 col-sm-0"></div>

      <div class="Right col-sm-12 col-md-5 ">

        <div class="Fix">

        <div class="HtmlWrap">

        <div class="fadivcode">
        <p class="php" aria-hidden="true">Swe</p>
      </div>
      </div>
      <div class="HtmlTextWrap">
        <h2 class="texthtmlSak">
        <b>Swedish</b>
        <h2>
      <p class="Html">Mother <br> tongue</p>
    </div>
    </div>

    <div class="Fix">

    <div class="HtmlWrap">
    <div class="fadivcode">
    <p class="php" aria-hidden="true">Fi</p>
  </div>
  </div>
  <div class="HtmlTextWrap">
    <h2 class="TextHtmlSak">
    <b>Finnish</b>
    <h2>
  <p class="Html">Basics</p>
</div>
</div>

<div class="Fix">

<div class="HtmlWrap">
<div class="fadivcode">
<p class="php" aria-hidden="true">Eng</p>
</div>
</div>
<div class="HtmlTextWrap">
  <h2 class="TextHtmlSak">
  <b>English</b>
  <h2>
<p class="Html">Good</p>
</div>
</div>

<div class="Fix">

<div class="HtmlWrap">
<div class="fadivcode">
<i class="fa fa-globe" aria-hidden="true"></i>
</div>
</div>
<div class="HtmlTextWrap">
  <h2 class="TextHtmlSak">
  <b>Others</b>
  <h2>
<p class="Html">No</p>
</div>
</div>

      </div>
    </div>
    </div>

    <A NAME="Page3">
    <div class="strek"></div>

    <h2 class="h2skills"><b>Previous Projects</b></h2>

    <div class="row">


      <div class="BgBild col-md-6">
        <div class="thumbnail">
            <img src="img/Megame.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <h2 class="RubBild">Pong</h2>
              <p class="ImgTxt">My first game a pong game.</p>
              <a target="_blank" href="http://hsjo.optipoint.fi/Me%20first%20game/Index.html"><button class="btn btn-primary BtnText">Play!</button><a>
            </div>
        </div>
      </div>

      <div class="BgBild col-md-6">
        <div class="thumbnail">
            <img src="img/FindNu.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <h2 class="RubBild">First page</h2>
              <p class="ImgTxt">One of my earlier sites. It doesn't do much but it looks nice.</p>
              <a target="_blank" href="http://hsjo.optipoint.fi/Test/"><button class="btn btn-primary BtnText">View!</button><a>
            </div>
        </div>
      </div>

    </div>

    <div class="BgBildrow2 row">

      <div class="BgBild col-md-6">
        <div class="thumbnail">
            <img src="img/1stboots.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <h2 class="RubBild">First bootstrap page</h2>
              <p class="ImgTxt">This was my first time using Bootstrap.</p>
                <a target="_blank" href="http://hsjo.optipoint.fi/Ovning4/Index.html"><button class="btn btn-primary BtnText">View!</button><a>
            </div>
        </div>
      </div>

      <div class="BgBild col-md-6">
        <div class="thumbnail">
            <img src="img/Knapp.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <h2 class="RubBild">Lightswitch</h2>
              <p class="ImgTxt">If you like clicking a button you should go to this site.</p>
                <a target="_blank" href="http://hsjo.optipoint.fi/Ovning%205/Index.html"><button class="btn btn-primary BtnText">View!</button><a>
            </div>
        </div>
      </div>

  </div>

  <A NAME="Page4">
  <div class="strek"></div>

  <h2 class="h2skills"><b>Contact Me!</b></h2>

  <div ="row">

  <div class="formpost col-md-5 col-xs-10">

  <form method="post">
        <input type="text" name="firstName" placeholder="First Name" value="">
        <br>
        <input type="text" name="lastName" placeholder="Second Name" value="">
        <br>
          <input type="email" name="email" placeholder="E-mail" value="">
          <br>
          <textarea rows="5" name="message" placeholder="Your messege..." value=""></textarea>
            <br>

            <input type="text" name="human" placeholder="What is 16 + 5?">
            <br>
          <input type="submit" class="subhover button" name="submit">

              </div>
              </div>

                <div class="Social">
                <a href="https://www.facebook.com/hannes.sjo" target="_blank" class="hover fa fa-facebook-official" aria-hidden="true"></a>

                <a href="https://github.com/HannesSjo" target="_blank" class="hover fa fa-github" aria-hidden="true"></a>


        </div>

      </div>

        <footer class="färg footer">
        <p class="text-muted">@ 2017</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("BTT").style.display = "block";
    } else {
        document.getElementById("BTT").style.display = "none";
    }
}
</script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98273462-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
