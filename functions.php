<?php
// funkce 1: Vypíše knihu
function vypisKnihu($nazev, $autor, $rok) {
    echo "<p><strong>$nazev</strong> od $autor ($rok)</p>";
}

// funkce 2: Vrací true, pokud je kniha starší než 50 let
function jeKlasika($rok) {
    return (date('Y') - $rok) > 50;
}

// funkce 3: Vloží novou knihu do databáze
function vlozKnihu($conn, $nazev, $autor, $rok) {
    $stmt = $conn->prepare("INSERT INTO knihy (nazev, autor, rok) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $nazev, $autor, $rok);
    $stmt->execute();
    $stmt->close();
}
?>
