<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź, czy tekst jest pangramem</title>
</head>
<body>
<h1>Sprawdź, czy tekst jest pangramem</h1>
<form method="post" action="sprawdz_pangram.php">
    <label for="tekst">Wpisz tekst:</label>
    <input type="text" name="tekst" id="tekst">
    <br><br>
    <input type="submit" value="Sprawdź">
</form>

<?php
if(isset($_POST['tekst'])) {
    $tekst = strtolower($_POST['tekst']);
    $alfabet = range('a', 'z');

    foreach($alfabet as $litera) {
        if(strpos($tekst, $litera) === false) {
            $pangram = false;
            break;
        }
    }

    if(isset($pangram) && $pangram === false) {
        echo "false";
    } else {
        echo "true";
    }
}
?>
</body>
</html>
