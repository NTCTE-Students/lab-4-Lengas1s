<?php
function average(array $numbers): ?float
{
    if (empty($numbers)) {
        return null; // Возвращаем null для пустого массива
    }
    $sum = array_sum($numbers); // Используем встроенную функцию array_sum для простоты
    return $sum / count($numbers);
}

// Пример использования:
$numbers = [10, 20, 30, 40, 50];
$avg = average($numbers);
echo "Среднее арифметическое массива: " . $avg; // Выведет: Среднее арифметическое массива: 30
echo "\n";
?>
