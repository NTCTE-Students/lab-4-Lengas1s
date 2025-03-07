<?php
function factorial(int $number): int
{
    if ($number < 0) {
        return 0; // Факториал не определен для отрицательных чисел
    }
    if ($number == 0) {
        return 1; // Факториал 0 равен 1
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Пример использования:
$number = 5;
$fact = factorial($number);
echo "Факториал числа {$number}: " . $fact; // Выведет: Факториал числа 5: 120
echo "\n";
?>
