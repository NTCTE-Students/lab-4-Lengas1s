<?php
function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

// Пример использования:
$celsiusTemp = 25;
$fahrenheitTemp = celsiusToFahrenheit($celsiusTemp);
echo "{$celsiusTemp}°C в градусах Фаренгейта: " . $fahrenheitTemp . "°F"; // Выведет: 25°C в градусах Фаренгейта: 77°F
echo "\n";
?>
