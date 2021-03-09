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
  <?php
    //stap 1
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "energy";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error){
        die("Connection failed ". $conn-connect_error);
    }
    $sql = "SELECT * FROM evenementen";
    if ($result = $conn->query($sql)){
        while($row = $result->fetch_array(MYSQLI_BOTH)){
            echo $row[1]. "  ".$row[2]. "<br>"; 
        }
        $result->close();
    }
    ?>
    <article>
      <h1>ENERGY DRANK</h1>
      <h2>Vitality Boost</h2>
    </article>
    <img id="orange-can" src="./images/orange-flavor.png" alt="blikje">
  </main>
  <section class="second-nav">
    <li><a href="#">komende events</a></li>
    <li><a href="#">event details</a></li>
    <li><a href="#">artiesten details</a></li>
    <li><a href="#">aanbiedingen</a></li>
  </section>
  <p class="copyright">© 2021 Vitality Energy. All rights reserved</p>
  <footer>
    <img id="pink-line" src="./images/pink-line.png" alt="pink-line">
    <img class="mobile-background" src="./images/mobile-achtergrond.png" alt="">
    <img class="background" src="./images/achtergrond.png" alt="">
  </footer>
</body>

</html>