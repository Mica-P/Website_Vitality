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

    <img class="grotefoto" src="images/eventdetails.jpg" alt="Evenement">
    <h1>Details van evenementen</h1>

    <<h2>Regels</h2>

    <ul class="lijstregels">
    <li>18+</li>
    <li>Geen alcohol/drugs</li>
    <li>Geen geweld</li>
    <li>Val geen andere mensen regels</li>
    <li>maak geen afval</li>
    <li>afstand houden van elkaar</li>
    <li>Bij klachten blijf thuis</li>
    </ul> 

    <img class="foto1" src="images/eventfoto1.jfif" alt="foto evenement1" >
    <img class="foto2" src="images/eventfoto2.jfif" alt="foto evenement2" >
    <img class="foto3" src="images/eventfoto3.jfif" alt="foto evenement3" >



    <article class="pteksten">
    <p>Op deze pagina vindt je alle informatie over de komende evenementen</p>
    <p>Op onze evenementen komen veel bekende artietsen zoals:</p>
    <p>Tones and i, Post Malone, elvis presley en veel meer!!</p>
    <p>Op de pagina van artiesten vindt je meer over de artiesten</p>
    <p>Onze evenement zijn in veel locaties in nederlands zoals:</p>
    <p>Leiden, Den Haag, Amsterdam, Leiden</p>
    </article>


    <!--Niet onder deze groep code zetten! Boven wel!-->
    <p class="copyright">© 2021 Vitality Energy. All rights reserved</p>
    <section class="backgroundImage-container">
        <!--    <img class="website-background" src="./images/background.png" alt="website-background"> -->
        <img class="mobile-background" src="./images/mobile-achtergrond.png" alt="mobile-background">
    </section>
</body>
</html>