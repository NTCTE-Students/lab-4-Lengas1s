<?php
function findMaxNumber(array $numbers): ?int
{
    if (empty($numbers)) {
        return null; // Возвращаем null для пустого массива
    }
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

// Пример использования:
$numbers = [1, 5, 2, 8, 3];
$maxNumber = findMaxNumber($numbers);
echo "Максимальное число в массиве: " . $maxNumber; // Выведет: Максимальное число в массиве: 8
echo "\n";
?>
