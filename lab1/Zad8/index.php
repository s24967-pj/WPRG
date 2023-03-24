<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 8</title>
</head>
<body>
<form method="post" >
    Liczba 1: <input type="number" name="liczba1"><br>
    Liczba 2: <input type="number" name="liczba2"><br>
    Liczba 3: <input type="number" name="liczba3"><br>
    <input type="submit" name="submit" value="Wyślij">
</form>

<?php

    $liczba1 = $_POST["liczba1"];
    $liczba2 = $_POST["liczba2"];
    $liczba3 = $_POST["liczba3"];

    if ($liczba1 <= $liczba2 && $liczba1 <= $liczba3) {
        echo $liczba1 . ", ";
        if ($liczba2 <= $liczba3) {
            echo $liczba2 . ", " . $liczba3;
        } else {
            echo $liczba3 . ", " . $liczba2;
        }
    } elseif ($liczba2 <= $liczba1 && $liczba2 <= $liczba3) {
        echo $liczba2 . ", ";
        if ($liczba1 <= $liczba3) {
            echo $liczba1 . ", " . $liczba3;
        } else {
            echo $liczba3 . ", " . $liczba1;
        }
    } elseif ($liczba3 <= $liczba1 && $liczba3 <= $liczba2) {
        echo $liczba3 . ", ";
        if ($liczba1 <= $liczba2) {
            echo $liczba1 . ", " . $liczba2;
        } else {
            echo $liczba2 . ", " . $liczba1;
        }
    }

    echo "<br>";


		if ($liczba1 >= $liczba2 && $liczba1 >= $liczba3) {
            echo $liczba1 . ", ";
            if ($liczba2 >= $liczba3) {
                echo $liczba2 . ", " . $liczba3;
            } else {
                echo $liczba3 . ", " . $liczba2;
            }
        } elseif ($liczba2 >= $liczba1 && $liczba2 >= $liczba3) {
            echo $liczba2 . ", ";
            if ($liczba1 >= $liczba3) {
                echo $liczba1 . ", " . $liczba3;
            } else {
                echo $liczba3 . ", " . $liczba1;
            }
        } elseif ($liczba3 >= $liczba1 && $liczba3 >= $liczba2) {
            echo $liczba3 . ", ";
            if ($liczba1 >= $liczba2) {
                echo $liczba1 . ", " . $liczba2;
            } else {
                echo $liczba2 . ", " . $liczba1;
            }
        }
        ?>
</body>
</html>

