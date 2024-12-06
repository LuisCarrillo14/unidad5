<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>CiTIM Grupo XB</title>
<link rel="stylesheet" href="css/problemaStem.css"/>

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<script src="js/calculaStem.js"></script>
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Aquí escribe el tema del problema</h2>
<p>Descripción:</p>
<p>Se dispone de una placa fotovoltaica de 60x30 cmm cuyo rendimiento es del 20%. Determinar la cantidad de energia electrica(Kwh)
    que generará, para acumunlar en una batería, si la placa ha estado funcionando durante 8 horas, siendo el coeficiente de radiación
    de 0.9 cal/min.cm2 Se admite que no hay perdidas ni en el transporte, ni en la carga de batería.
    </p>
</section>
<section class="esquemaProblema">
<h2>Esquema</h2>
<!--Buscar o crear una impagen que represente el problema jpg o png-->
<center>
<img class="imgProblema" src="images/problema.jpg">
</center>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<!--Aqui van las fórmulas a emplear, de preferencia despejar la variable a calcular-->
<p>Q = K * t * S * r en Kcal</p>
<p>Convertir a Kwh (base 1 h.)</p>
</section>
<section class="datos">
<h2>Datos:</h2>
<!--A partir del enunciado del problema, ecribir una lista de los datos proporcionados para calcular en las unidades de Sistema Internacional de medidas. Incluir valores de constantes y datos de otras fuentes-->
<p>Q = Energia generada </p>
<p>K = Coeficiente de radiación</p>
<p>t = tiempo en minutos</p>
<p>S = Area en cm2</p>
<p>r = rendimiento</p>
</section>
<section class="calculos">
<h2>Solución</h2>

<p>
Q = K · t · S
<br><br>
La placa fotovoltaica tiene una superficie de S = 60 · 30 cm² = 1 800 cm²
Funciona durante 8 h = 8 · 60 s = 480 min
<br><br>
Q = K · t · S = 0,9 cal/min·cm² · 480 min · 1 800 cm² = 777 600 cal = 777,6 Kcal
<br><br>
El rendimiento es del 20% y por tanto la energía obtenida es:
<br><br>
777,6 · 0,2 Kcal = 155,52 Kcal ·
(10³ cal / 1 Kcal) · (4,18 J / 1 cal) · (1 w·s / 1 J) · (1 Kw / 10³ w) · (1 h / 3 600 s) = 0,18 Kwh
</p>

</section>
<section class="resultadoA">
<h2>Resultado:</h2>
<div id="resultadoA"></div>

<?php
    $ancho = 60; 
    $alto = 30;    
    $area = $ancho * $alto;
    $rendimiento = 0.20;
    $coeficienteRadiacion = 0.9; 
    $minutos = 8 * 60;
    
    // Energía total recibida por la placa (en cal)
    $energiaRecibida = $area * $coeficienteRadiacion * $minutos;
    
    // Energía generada (en cal) considerando el rendimiento
    $energiaGeneradaCal = $energiaRecibida * $rendimiento;
    
    // Conversión de calorías a vatios-hora
    // 1 cal = 0.00116222 Wh
    $energiaGeneradaWh = $energiaGeneradaCal * 0.00116222;
    
    // Conversión de vatios-hora a kilovatios-hora
    $energiaGeneradaKWh = $energiaGeneradaWh / 1000;
    
    echo "La cantidad de energía generada por la placa es: " . round($energiaGeneradaKWh, 4) . " kWh\n\n";
    
?>

</section>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>
