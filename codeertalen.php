<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>AzerApi.xyz: Portofolio</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">


  <?php require_once('includes/head.php')?>
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<?php require_once('includes/header.php')?>

  <!-- Add your site or application content here -->
  <div class="wrapper">

  <h2 class="taal" id="web">Web development</h2>
  <div class="container">
    <div class="front">
      <h2>Frontend</h2>
       <p>wat betreft frontend development ken ik de volgende talen die de meeste frontend developers moeten kennen:</p>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JS</li>
      </ul>
    </div>
    <div class="back">
      <h2>Backend</h2>
      <P>In de backend talen ken ik de meest gangbare talen maar naar frontend gaat wel mijn voorkeur uit</P>
      <ul>
        <li>PHP</li>
        <li>MYSQL</li>
        <li>PHP My Admin</li>
      </ul>
    </div>
    <div class="frame">
      <h2>Frameworks</h2>
      <p>Wat betreft frameworks heb ik er nog maar 1 geleerd:</p>
      <ul>
        <li>Laravel</li>
      </ul>
   </div>
    <div class="java">
      <h2>JavaScipt Libraries</h2>
      <p>Ik heb al met een aantal JavaScript libraries gewerkt en naar deze gaan mijn voorkeur uit:</p>
      <ul>
        <li>AnimeJS</li>
        <li>FullpageJS</li>
        <li>een klein beetje ReactJS</li>
      </ul>
    </div>
  </div>
  <div class="spacer"></div>
  <h2 class="taal" id="win">Windows Development en overig</h2>
  <div class="container">
    <div class="python">
      <h2>Python</h2>
      <p>Python is een van mijn favoriete talen omdat:</p>
      <ul>
        <li>Het een makkelijke en lightweight taal is</li>
        <li>de syntax makkelijk te snappenis</li>
        <li>je kan er uitzonderlijk veel mee</li>
      </ul>
    </div>
    <div class="java">
        <h2>Java Development</h2>
        <p>Java is de eerste progameer taal die ik beheerste en ik kan er hierdoor ook goed mee overweg</p>
        <p>Mijn java vaardigheden:</p>
        <ul>
            <li>Minecraft plugin development</li>
        </ul>
    </div>
    <div class="c#" >
        <h2>C#</h2>
        <p>C# is een taal die we op mijn opleiding aangeleerd krijgen.</p>
        <p>Wat kan ik in c#?</p>
        <ul>
            <li>Console apps(bijv. een text adventure spel)</li>
            <li>MVVM apps</li>
            <li>UWP apps</li>
            <li>winforms apps</li>
            <li>asp.net apps</li>
        </ul>
    </div>
    <div class="go">
        <h2>GO Development</h2>
        <p>GO heb ik mezelf aangeleerd en kan hierdoor er dingen in coderen maar niet heel ingewikkeld</p>
        <p>GO projecten:</p>
        <ul>
            <li>GO Webserver</li>
            <li>GO website</li>
            <li>GO textadventure</li>
        </ul>
    </div>
  </div>
</div>

<?php require_once('includes/footer.php') ?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script>
    var obj = document.getElementById('talen')
    obj.classList.add('active')

  </script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
