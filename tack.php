<?php
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "Gäst";
$choice = isset($_POST["choice"]) ? htmlspecialchars($_POST["choice"]) : "övrigt";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack för ditt meddelande – Alan Turing Portfolio</title>
    <meta name="description" content="Tack för ditt meddelande.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page">
    <header class="header">
        <nav class="header__nav" aria-label="Huvudmeny">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="index.html">Om mig</a></li>
                <li class="nav__item"><a class="nav__link" href="kompetenser.html">Kompetenser</a></li>
                <li class="nav__item"><a class="nav__link" href="projekt.html">Projekt</a></li>
                <li class="nav__item"><a class="nav__link" href="utbildning.html">Utbildning</a></li>
                <li class="nav__item"><a class="nav__link" href="ai.html">AI &amp; Etik</a></li>
                <li class="nav__item"><a class="nav__link" href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main class="page__main">
        <h1 class="page__title">Tack, <?php echo $name; ?>!</h1>
        <p class="page__text">Ditt meddelande gällande "<strong><?php echo $choice; ?></strong>" har skickats. Vi återkommer så snart som möjligt.</p>
        <p><a href="index.html" class="back-link">Tillbaka till startsidan</a></p>
    </main>

    <footer class="footer">
        <p class="footer__text">&copy; 2026 Alan Turing Portfolio</p>
    </footer>
</body>
</html>