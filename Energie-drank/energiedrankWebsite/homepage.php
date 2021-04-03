<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="language" content="nl">
  <meta name="description" content="Vitality, website">
  <meta name="keywords" content="Vitality, energiedrank, website">
  <meta name="author" content="Mica Paulo, Sijme Heemskerk, Mike van Duyvenbode, Dinand Dummer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage - Vitality</title>
  <link rel="stylesheet" type="text/css" href="./css/homepage.css">
  <link rel="shortcut icon" href="images/mini-logo.gif">
</head>
</head>

<body>

  <header><img id="mini-logo" src="./images/mini-logo.gif" alt=""></header>
  <details class="mobile-content">
    <summary class="hamburger-icon">&#9776;</summary>
    <nav class="first-nav">
      <ul>
        <li><a href="Evenementen-overzicht.php">Events</a></li>
        <li><a href="artiesten-overzicht.php">Artiesten</a></li>
        <li><a href="producten.php">Producten</a></li>
        <li><a href="aanbiedingen-overzicht.php">Aanbiedingen</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="overons.php">Over Ons</a></li>
      </ul>
    </nav>
  </details>
  <div class="bigscreen-content">
    <nav class="first-nav">
      <ul>
        <li><a href="Evenementen-overzicht.php">Events</a></li>
        <li><a href="artiesten-overzicht.php">Artiesten</a></li>
        <li><a href="producten.php">Producten</a></li>
        <li><a href="aanbiedingen-overzicht.php">Aanbiedingen</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="overons.php">Over Ons</a></li>
      </ul>
    </nav>
  </div>
  <main>

    <article>
      <h1>ENERGY DRANK</h1>
      <h2>Vitality Boost</h2>
    </article>
    <img id="orange-can" src="./images/orange-flavor.png" alt="blikje">
  </main>
  <section class="artiesten">
    <a href="artiesten-overzicht.php">
      <h3>Komede artiesten</h3>
    </a>
    <?php
    //stap 1
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "energy";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
      die("Connection failed " . $conn->connect_error);
    }
    $artiesten = "SELECT * FROM artiesten LIMIT 3";
    if ($result = $conn->query($artiesten)) {
      while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        echo $row[1] . "  " . "<br>";
      }
      $result->close();
    }
    ?>
  </section>
  <section class="evenementen">
    <a href="evenementen-overzicht.php">
      <h3>Komende evenementen</h3>
    </a>
    <?php
    $evenementen = "SELECT * FROM evenementen ORDER BY datum LIMIT 3";
    if ($result = $conn->query($evenementen)) {
      while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        echo $row[1] . "  " . "<br>";
      }
      $result->close();
    }
    ?>
  </section>
  <section class="aanbiedingen">
    <a href="aanbiedingen-overzicht.php">
      <h3>Komende aanbiedingen</h3>
    </a>
    <?php
    $aanbiedingen = "SELECT titel FROM aanbiedingen ORDER BY begindatum LIMIT 3";
    if ($result = $conn->query($aanbiedingen)) {
      while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        echo $row[0] . "  " . "<br>";
      }
      $result->close();
    }
    ?>
  </section>
  <p class="copyright">© 2021 Vitality Energy. All rights reserved</p>
  <footer>
    <img id="pink-line" src="./images/pink-line.png" alt="pink-line">
    <img class="mobile-background" src="./images/mobile-achtergrond.png" alt="mobile-background">
    <img class="background" src="./images/achtergrond.png" alt="bigscreen-background">
  </footer>
</body>

</html>