<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>AzerApi.xyz: Portofolio</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
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

<style>
  ul li p a{
    color:white;
    text-decoration:none;
    font-size: 2rem;
  }
</style>


  <!-- Add your site or application content here -->
  <div class="orbit">
    <div class="center-image">
      <img style="border-radius: 25%;" src="assets/man2.jpg" alt="">
      <img style="border-radius: 25%;" src="assets/man.png" alt="">
    </div>
    <ul>
      <li>
        <div><img src="assets/html.svg" alt=""></div>
        <p><a href="codeertalen.php#web">HTML</a></p>
      </li>
      <li>
        <div><img src="assets/css.3.svg" alt=""></div>
        <p><a href="codeertalen.php#web">CSS</a></p>
      </li>
      <li>
        <div><img src="assets/js.svg" alt=""></div>
        <p><a href="codeertalen.php#web">JS</a></p>
      </li>
      <li>
        <div><img src="assets/php.svg" alt=""></div>
        <p><a href="codeertalen.php#web">PHP</a></p>
      </li>
      <li>
        <div><img src="assets/python.svg" alt=""></div>
        <p><a href="codeertalen.php#win">Python</a></p>
      </li>
      <li>
        <div><img src="assets/go.svg" alt=""></div>
        <p><a href="codeertalen.php#win">GO</a></p>
      </li>
      <li>
        <div><img src="assets/calendar.svg" alt=""></div>
        <p><a href="stage.php">Stage</a></p>
      </li>
      <li>
        <div><img src="assets/person.svg" alt=""></div>
        <p><a href="mij.php">over Mij</a></p>
      </li>
    </ul>
  </div>

<div class="fixed">

  <?php require_once('includes/footer.php') ?>
  </div>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script>
    var obj = document.getElementById('home')
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
