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
  <div class="typewriter" id="type">
    <h1 >Wie is Jari van kaam?</h1>
    <p class="subtitle">Ik ben een hardwerkende 19 jarige student</p>
    <p class="subtitle">Naast hardwerkend kan ook goed in <br>een team samen werken en pak ik code snel op.</p>
    <p class="subtitle">Ik ben doelgericht en maak ik mijn taken altijd af. <br> als dit niet lukt laat ik optijd iets weten</p>

    <ul>
      <p class="subtitle">Mijn hobbies zijn onder andere:</p>
        <p class="subtitle">Coderen</p>

        <p class="subtitle">Gamen</p>

        <p class="subtitle">Lezen</p>

        <p class="subtitle">YouTube</p>

    </ul>
  </div>
</div>

<div class="fixed">

  <?php require_once('includes/footer.php') ?>
</div>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script>
  var obj = document.getElementById('mij')
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
