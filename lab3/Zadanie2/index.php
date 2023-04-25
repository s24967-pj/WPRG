<!DOCTYPE html>
<html>
<head>
    <title>Formularz zapisujący dane do pliku</title>
</head>
<body>
<h2>Wprowadź dane do zapisania:</h2>
<form action="zapisz_do_pliku.php" method="post">
    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie"><br><br>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Zapisz">
</form>
</body>
</html>
