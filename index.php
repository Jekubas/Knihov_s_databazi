<?php
require_once 'db.php';
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazev = $_POST['nazev'];
    $autor = $_POST['autor'];
    $rok = (int)$_POST['rok'];
    vlozKnihu($conn, $nazev, $autor, $rok); // INSERT
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Knihovna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Seznam knih</h1>

    <?php
    $vysledek = $conn->query("SELECT * FROM knihy"); // SELECT
    // cyklus 1
    while ($kniha = $vysledek->fetch_assoc()) {
        vypisKnihu($kniha['nazev'], $kniha['autor'], $kniha['rok']); // funkce 1
        // větvení 1
        if (jeKlasika($kniha['rok'])) {
            echo "<p>// větvení 1: Jedná se o klasiku.</p>";
        } else {
            echo "<p>// větvení 1: Moderní kniha.</p>";
        }
        echo "<hr>";
    }
    ?>

    <h2>Přidat novou knihu</h2>
    <form method="post">
        Název: <input type="text" name="nazev" required><br>
        Autor: <input type="text" name="autor" required><br>
        Rok vydání: <input type="number" name="rok" required><br>
        <button type="submit">Přidat</button>
    </form>
</body>
</html>