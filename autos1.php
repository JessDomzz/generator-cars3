<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <div>
        <h1 id="title">Generador de carros</h1>
    </div>
    <form name="form" action="autos2.php" method="post">
        <div class="principal-content">
            <div class="space-top">
                <label class="bold">Marca y Modelo:</label>
                <select name="mark" id="mark">
                    <option value="Seleccione" selected>Seleccione una opción</option>
                    <optgroup label="Nissan" value="Nissan">
                        <option value="March">March (Hatchback)</option>
                        <option value="Versa">Versa (Sedán)</option>
                        <option value="X-Trail">X-Trail (SUV)</option>
                        <option value="37OZ">37OZ (Coupé)</option>
                    </optgroup>
                    <optgroup label="Ford" value="Ford">
                        <option value="Figo">Figo (Hatchback)</option>
                        <option value="Fiesta">Fiesta (Sedán)</option>
                        <option value="Eco-Sport">Eco-Sport (SUV)</option>
                        <option value="Mustang">Mustang (Coupé)</option>
                    </optgroup>
                    </optgroup>
                    <optgroup label="Chevrolet" value="Chevrolet">
                        <option value="Beat">Beat (Hatchback)</option>
                        <option value="Aveo">Aveo (Sedán)</option>
                        <option value="Trax">Trax (SUV)</option>
                        <option value="Camaro">Camaro (Coupé)</option>
                    </optgroup>
                    <optgroup label="Mazda" value="Mazda">
                        <option value="Mazda2">Mazda 2 (Hatchback)</option>
                        <option value="Mazda 3">Mazda 3 (Sedán)</option>
                        <option value="Mazda CX-3">Mazda CX-3 (SUV)</option>
                        <option value="Mazda MX-5">Mazda MX-5 (Coupé)</option>
                    </optgroup>
                    <optgroup label="Audi" value="Audi">
                        <option value="Audi A1">Audi A1 (Hatchback)</option>
                        <option value="Audi A3">Audi A3 (Sedán)</option>
                        <option value="Audi Q7">Audi Q7 (SUV)</option>
                        <option value="Audi R8">Audi R8 (Coupé)</option>
                    </optgroup>
                </select>
            </div>
            <div class="space-top">
                <label class="bold">Año:</label>
                <input type="text" size="3" id="year" name="year-inpt" autocomplete="off" maxlength="4">
            </div>
            <div class="space-top">
                <label class="bold">Color:</label>
                <select name="colors" id="color">
                    <option value="Seleccionar" id="colorOption" selected>Seleccione una opción</option>
                    <option value="Azul Marino">Azul Marino</option>
                    <option value="Azul Cielo">Azul Cielo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Negro">Negro</option>
                    <option value="Gris">Gris</option>
                    <option value="Verde">Verde</option>
                    <option value="Naranja">Naranja</option>
                    <option value="Tinto">Tinto</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Amarillo">Amarillo</option>
                </select>
            </div>
            <div>
                <p class="space-top bold">Favor de digitar únicamente 3 letras mayúsculas, seguidas de un "-" y 4 números</p>
                <p class="bold">Por ejemplo "JDA-1905"</p>
                <label class="space-top bold">Matrícula:</label>
                <input class="space-top" type="text" size="6" id="registration" name="registration-inpt" autocomplete="off" maxlength="8">
            </div>
            <div class="space-top">
                <label class="bold">Versión:</label>
                <select name="versions" id="version">
                    <option value="Seleccionar" id="versionSelect" selected>Seleccione una opción</option>
                    <option value="Básica">Básica</option>
                    <option value="De Lujo">De Lujo</option>
                </select>
            </div>
            <div class="space-top">
                <label class="bold">Transmisión:</label>
                <select name="transmitions" id="transmition">
                    <option value="Seleccionar" id="transmitionSelect" selected>Seleccione una opción</option>
                    <option value="Estándar">Estándar</option>
                    <option value="Automática">Automática</option>
                </select>
            </div>
            <button class="space-top" type="submit">ENVIAR</button>
        </div>
    </form>
    <script src="app.js"></script>
</body>
</html>