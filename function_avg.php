<?php

function average($numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $sum / $count;
}

// Вызов функции
$numbers = [1, 2, 3, 4, 5];
$result = average($numbers);

print("Среднее значение: {$result}");