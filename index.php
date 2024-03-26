<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
   <h1><b>operacje na zmiennych i funkcja</b></h1>
    <div>
    <?php
    $liczba1 = 12.3;
    $liczba2 = 15.52;  
    $liczba3 = 100320.48;
    echo "<h2>działania</h2>";
    $odejmowanie = $liczba2 - $liczba3;
    echo "Wynik odejmowania dwóch zmiennych to: $odejmowanie";
    echo "<br>";
    
    $dodawanie = $liczba1 + $liczba2;
    echo "Wynik dodawania dwóch zmiennych to: $dodawanie";
    echo "<br>";
    
    $mnozenie = $liczba1 * $liczba2;
    echo "Wynik mnożenia dwóch zmiennych to: $mnozenie";
    echo "<br>";
    
    $dzielenie = $liczba1 / $liczba2;
    echo "Wynik dzielenia dwóch zmiennych to: $dzielenie";
    echo "<br>";
    
    $imie = 'Tobiasz';  
    $liczba = 'sto';  
    echo "$imie ma $liczba iq";  
    echo "<br>";
//deklaracja funkcji
echo "<h2>funkcja</h2>";
function powitanie ()
{
echo "<br>";
echo "witaj w programie";
echo "<br>";
}
powitanie();
function suma($liczba1,$liczba2,$liczba3)
{
    $suma=($liczba1+$liczba2+$liczba3);
    echo "<br> wynik sumy to: $suma <br>";
}
suma(12,3,2);
function witaj($imie) {
    return "Witaj $imie w świecie PHP!";
}


$imię = "tobyny";
$powitanie = witaj($imię);
echo $powitanie;

    ?>
    </div>
</body>
</html>
