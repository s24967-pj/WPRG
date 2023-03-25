<!DOCTYPE html>
<html>
<head>
    <title>Formularz rezerwacji</title>
</head>
<body>
<h1>Formularz rezerwacji</h1>
<form method="post" action="rezerwacja">
    <label for="ilosc_osob">Ilość osób:</label>
    <select name="ilosc_osob" id="ilosc_osob">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br><br>
    <label for="imie">Imię:</label>
    <input type="text" name="imie" id="imie" required>
    <br><br>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" id="nazwisko" required>
    <br><br>

    Adres: <br><br>
    <label for="adres">Ulica:</label>
    <input type="text" name="ulica" id="ulica">
    <br><br>
    <label for="adres">Nr. domu:</label>
    <input type="text" name="nr" id="nr">
    <br><br><br><br>

    Karta kredytowa: <br><br>
    <label for="karta">Numer karty:</label>
    <input type="text" name="nrk" id="nrk">
    <br><br>
    <label for="karta">CVV:</label>
    <input type="text" name="CVV" id="CVV">
    <br><br><br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="data_pobytu">Data pobytu:</label>
    <input type="date" name="data_pobytu" id="data_pobytu" required>
    <br><br>
    <label for="godzina_przyjazdu">Godzina przyjazdu:</label>
    <input type="time" name="godzina_przyjazdu" id="godzina_przyjazdu">
    <br><br>
    <label for="udogodnienia">Udogodnienia:</label>
    <select name="udogodnienia[]" id="udogodnienia" multiple>
        <option value="klimatyzacja">Klimatyzacja</option>
        <option value="popielniczka">Popielniczka dla palacza</option>
        <option value="dostawka_dla_dziecka">Dostawka dla dziecka</option>
    </select>
    <br><br>
    <input type="submit" value="Zarezerwuj">
</form>
</body>
</html>