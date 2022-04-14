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
    <div class="container">
        <div class="getbright">
            <h2>GetBright</h2>
            <p>Stagair website developement(frontend en backend)</p>
            <p>Tijdens mijn stage bij GetBright heb ik de volgende projecten gemaakt:</p>
            <ul class="projects">
                <li><a target="_blank" href="https://lmadvies.eu/">LMAdvies</a></li>
                <li><a target="_blank" href="https://www.talent-en-vitaliteitcoach.nl/">Talent en vitaliteitcoach</a></li>
                <li>Tegeltjeshumor</li>
            </ul>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php') ?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script>
    var obj = document.getElementById('stages')
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
