<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="main.css">
    <title>Cars</title>
</head>
<body>
<?php
$varMark;
$varMarkCar = $_POST["mark"];
$varTypeCar;
$varDoors;
$varYearCar = $_POST["year-inpt"];
$varYear2;
$varYearActual = 2019;
$varPriceCar;
$varTax;

switch ($varMarkCar) {
    case "March":
    case "Versa":
    case "X-Trail":
    case "37OZ":
        $varMark = "Nissan";
    break;
    case "Figo":
    case "Fiesta":
    case "Mustang":
    case "Eco-Sport":
        $varMark = "Ford";
    break;
    case "Beat":
    case "Aveo":
    case "Trax":
    case "Camaro":
        $varMark = "Chevrolet";
    break;
    case "Mazda2":
    case "Mazda 3":
    case "Mazda CX-3":
    case "Mazda MX-5":
        $varMark = "Mazda";
    break;
    case "Audi A1":
    case "Audi A3":
    case "Audi Q7":
    case "Audi R8":
        $varMark = "Audi";
    break;
}

switch ($varMarkCar) {
    case "March":
    case "Figo":
    case "Beat":
    case "Mazda2":
    case "Audi A1":
        $varTypeCar = "Hatchback";
        $varDoors = 5;
    break;
    case "Versa":
    case "Fiesta":
    case "Aveo":
    case "Mazda 3":
    case "Audi A3":
        $varTypeCar = "Sedán";
        $varDoors = 4;
    break;
    case "X-Trail":
    case "Eco-Sport":
    case "Trax":
    case "Mazda CX-3":
    case "Audi Q7":
        $varTypeCar = "SUV";
        $varDoors = 4;
    break;
    case "37OZ":
    case "Mustang":
    case "Camaro":
    case "Mazda MX-5":
    case "Audi R8":
        $varTypeCar = "Coupé";
        $varDoors = 2;
    break;
}

function determiningPrice() {
    global $varYearCar, $varYearActual;
    $varBasePrice = 300000;
    $varTotalCalculation;
    if ($varYearCar == $varYearActual) {
        $varPriceCar = $varBasePrice;
    } else {
        $varTotalCalculation = $varBasePrice - ($varBasePrice * (($varYearActual - $varYearCar) * 0.15));
        if ($varTotalCalculation < 30000) {
            $varPriceCar = 30000;
        } else {
            $varPriceCar = $varTotalCalculation;
        }
    }
    return $varPriceCar;
}

function determiningTax(/*$determiningPrice*/) {
    $varTax = determiningPrice() * 0.1;
    return $varTax;
}

echo "<div class='principal-content'>";
echo "<h1 id='title'>Generador De Carros</h1>";
echo "<div class='space-top'>";
echo "<span class='bold'>Marca:</span>".$varMark;
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Modelo:</span>".$_POST["mark"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Año:</span>".$_POST["year-inpt"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Color:</span>".$_POST["colors"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Matrícula:</span>".$_POST["registration-inpt"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Llantas:</span> 4";
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Puertas:</span>".$varDoors;
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Tipo:</span>".$varTypeCar;
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Versión:</span>".$_POST["versions"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Transmisión:</span>".$_POST["transmitions"];
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Precio:</span>". "$".determiningPrice();
echo "</div>";
echo "<div class='space-top'>";
echo "<span class='bold'>Impuesto:</span>"."$".determiningTax(/*$determiningPrice*/);
echo "</div>";
echo "</div>";
?>
</body>
</html>





