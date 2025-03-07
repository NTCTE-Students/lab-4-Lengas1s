<?php
function sumOfDigits(int $number): int
{
    $numberString = (string) $number; // Преобразуем число в строку
    $sum = 0;
    for ($i = 0; $i < strlen($numberString); $i++) {
        $sum += (int) $numberString[$i]; // Преобразуем каждый символ обратно в число и добавляем к сумме
    }
    return $sum;
}

// Пример использования:
$number = 12345;
$digitSum = sumOfDigits($number);
echo "Сумма цифр числа {$number}: " . $digitSum; // Выведет: Сумма цифр числа 12345: 15
echo "\n";
?>
