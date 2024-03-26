<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zajecia 26 marca</title>
</head>
<body>
<style>
        body {
            background-color: #ff33bb;
            color: #333;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        div {
            background-color: #f9f9f9;
            padding: 5px;
            border: 1px solid #ccc;
            display: block;
        }
    </style>
<div>
<?php
//funkcja cxi





function sprawdz_typy($parametr1, $parametr2, $parametr3) {
    echo 'Typ zmiennej $parametr1 to: ' . gettype($parametr1) . "<br>";
    echo 'Typ zmiennej $parametr2 to: ' . gettype($parametr2) . "<br>";
    echo 'Typ zmiennej $parametr3 to: ' . gettype($parametr3) . "<br>";
    
   
}


echo sprawdz_typy(123.45, "test", 234) . "<br>";


echo sprawdz_typy(44, "test numer 2", "Ala ma kota") . "<br>";


echo sprawdz_typy(789, 455, 85.5565) . "<br>";


function dzielenie($liczba1, $liczba2) {
    $wynik = round($liczba1 / $liczba2, 3);
    echo "Wynik dzielenia: $wynik <br>";
    return $wynik;
}
dzielenie (12901,1324);

function delta($a, $b, $c) {
    $delta = pow($b, 2) - 4 * $a * $c;
    echo "Δ wynosi: $delta <br>";
    return $delta;
}

delta(1,2,1);



function zaokraglanie($liczba) {
    $zaokraglona_w_dol = floor($liczba);
    $zaokraglona_w_gore = ceil($liczba);
  
    
    echo "Zaokrąglona w dół: $zaokraglona_w_dol, Zaokrąglona w górę: $zaokraglona_w_gore, <br>";
}
zaokraglanie(3.22222);
zaokraglanie(4.93);

?>

</div>



















</body>
</html>