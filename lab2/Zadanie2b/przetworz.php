<!DOCTYPE html>
<html>
<head>
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
<h1>Podsumowanie rezerwacji</h1>
<?php
if (isset($_POST['email'])) {
    $ilosc_osob = $_POST['ilosc_osob'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $ulica = $_POST['ulica'];
    $nr = $_POST['nr'];
    $nrk = $_POST['nrk'];
    $CVV = $_POST['CVV'];
    $email = $_POST['email'];
    $data_pobytu = $_POST['data_pobytu'];
    $godzina_przyjazdu = $_POST['godzina_przyjazdu'];
    $udogodnienia = $_POST['udogodnienia'];


    echo "<p><strong>Ilość osób:</strong> $ilosc_osob</p>";
    echo "<p><strong>Imię:</strong> $imie</p>";
    echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
    echo "<p><strong>Adres:</strong> $ulica $nr</p>";
    echo "<p><strong>Numer karty:</strong> $nrk</p>";
    echo "<p><strong>CVV:</strong> $CVV</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data pobytu:</strong> $data_pobytu</p>";
    echo "<p><strong>Godzina przyjazdu:</strong> $godzina_przyjazdu</p>";
    echo "<p><strong>Udogodnienia:</strong> ";
    if (empty($udogodnienia)) {
        echo "Brak";
    } else {
        echo implode(", ", $udogodnienia);
    }
    echo "</p>";
} else {
    echo "<p>Proszę wypełnić formularz i kliknąć przycisk \"Zarezerwuj\".</p>";
}
?>
</body>
</html>