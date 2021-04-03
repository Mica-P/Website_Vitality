<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="Vitality, website">
    <meta name="keywords" content="Vitality, energiedrank, website">
    <meta name="author" content="Mica Paulo, Sijme Heemskerk, Mike van Duyvenbode, Dinand Dummer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/evenementen-overzicht.css">
    <link rel="shortcut icon" href="images/mini-logo.gif">
    <title>Evenementen-overzichtt</title>
</head>

<body>
    <header><img class=" logo" class="logo" src="./images/mini-logo.gif" alt="logo">
    </header>
    <details>
        <summary class="hamburger-icon">&#9776;</summary>
        <nav class="mobile-nav">
            <ul>
                <li><a href="homepage.php">Homepage</a></li>
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
    <nav class="bigscreen-nav">
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="Evenementen-overzicht.php">Events</a></li>
            <li><a href="artiesten-overzicht.php">Artiesten</a></li>
            <li><a href="producten.php">Producten</a></li>
            <li><a href="aanbiedingen-overzicht.php">Aanbiedingen</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="overons.php">Over Ons</a></li>
        </ul>
    </nav>

    <article class="evenementen">
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
        $evenementen = "SELECT * FROM evenementen ORDER BY begindatum LIMIT 3";
        if ($result = $conn->query($evenementen)) {
            while ($row = $result->fetch_array(MYSQLI_BOTH)) {
                echo "<a  href='evenementen.php?id=" . $row[0] . "'>" . $row[1] . "</a>" . "<br>";
            }
            $result->close();
        }
        ?>
    </article>

    <img src="images/eventdetails.jpg" alt="Evenement">
    <h1>Evenement details</h1>

    <<h2>Regeks</h2>

<ul>
  <li>18+</li>
  <li>Geen alcohol/drugs</li>
  <li>Geen geweld</li>
</ul> 

    <p>

    </p>

    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">

    <!--Niet onder deze groep code zetten! Boven wel!-->
    <p class="copyright">© 2021 Vitality Energy. All rights reserved</p>
    <section class="backgroundImage-container">
        <!--    <img class="website-background" src="./images/background.png" alt="website-background"> -->
        <img class="mobile-background" src="./images/mobile-achtergrond.png" alt="mobile-background">
    </section>
</body>

</html>