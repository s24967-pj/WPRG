<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie, czy liczba jest pierwsza</title>
</head>
<body>
<h1>Sprawdzenie, czy liczba jest pierwsza</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['liczba'])) {
        echo '<p>Błąd: nie przesłano liczby</p>';
    } else {
        $liczba = $_POST['liczba'];
        if (!is_numeric($liczba) || $liczba < 1 || floor($liczba) != $liczba) {
            echo '<p>Błąd: podano niepoprawną liczbę</p>';
        } else {
            function czy_pierwsza($n) {
                if ($n < 2) return false;
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) return false;
                }
                return true;
            }

            $iteracje = 0;
            if (czy_pierwsza($liczba)) {
                echo "<p>Liczba $liczba jest liczbą pierwszą.</p>";
            } else {
                echo "<p>Liczba $liczba nie jest liczbą pierwszą.</p>";
            }
            echo "<p>Wykonano $iteracje iteracji.</p>";
        }
    }
}
?>
</body>
</html>
