<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Marlena</title>

  <meta name="description" content="Search the web for sites and images.">
  <meta name="keywords" content="Search engine, marlena, websites">
  <meta name="author" content="Richard Angapin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<meta name="theme-color" content="#f00a">

</head>
<body>

  <div class="wrapper indexPage">


    <div class="mainSection">

      <div class="logoContainer">
        <img src="assets/images/marlenaLogo.png" title="Logo of the site" alt="Site logo">
      </div>


      <div class="searchContainer">

        <form action="search.php" method="GET">

          <input class="searchBox" type="text" name="term" autocomplete="on">
          <input class="searchButton" type="submit" value="Search">


        </form>

      </div>


    </div>


  </div>
<script src="service-worker.js"></script>
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('service-worker.js')
      .then(reg => {
        console.log('Service worker registered! 😎', reg);
      })
      .catch(err => {
        console.log('😥 Service worker registration failed: ', err);
      });
  });
}
</script>
<noscript>
  <a href="https://marlena.richardangapin.io/">The Link</a>
</noscript>
</body>
</html>