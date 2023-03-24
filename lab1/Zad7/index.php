<!DOCTYPE html>
<html>
<head>
    <title>Zadanie7</title>
</head>
<body>
<form method="post" >
    Liczba: <input type="number" name="liczba">
    <input type="submit" name="submit" value="Wyślij">
</form>

<?php

    $liczba = $_POST["liczba"];

    switch ($liczba) {
        case 1:
            $miesiac = "Styczeń";
            $ilosc_dni = 31;
            break;
        case 2:
            $miesiac = "Luty";
            $ilosc_dni = 28;
            break;
        case 3:
            $miesiac = "Marzec";
            $ilosc_dni = 31;
            break;
        case 4:
            $miesiac = "Kwiecień";
            $ilosc_dni = 30;
            break;
        case 5:
            $miesiac = "Maj";
            $ilosc_dni = 31;
            break;
        case 6:
            $miesiac = "Czerwiec";
            $ilosc_dni = 30;
            break;
        case 7:
            $miesiac = "Lipiec";
            $ilosc_dni = 31;
            break;
        case 8:
            $miesiac = "Sierpień";
            $ilosc_dni = 31;
            break;
        case 9:
            $miesiac = "Wrzesień";
            $ilosc_dni = 30;
            break;
        case 10:
            $miesiac = "Październik";
            $ilosc_dni = 31;
            break;
        case 11:
            $miesiac = "Listopad";
            $ilosc_dni = 30;
            break;
        case 12:
            $miesiac = "Grudzień";
            $ilosc_dni = 31;
            break;
        default:
            echo "BŁĄD";
            exit();
    }

    echo "Miesiąc: " .  $miesiac  . "<br>";
    echo "Ilość dni: " . $ilosc_dni;

?>
</body>
</html>
