<?php
function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false; // 1 и числа меньше 1 не являются простыми
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Если число делится на что-то кроме 1 и себя, оно не простое
        }
    }
    return true;
}

// Пример использования:
$number1 = 17;
$number2 = 15;
echo "{$number1} - простое число? " . (isPrime($number1) ? 'Да' : 'Нет'); // Выведет: 17 - простое число? Да
echo "\n";
echo "{$number2} - простое число? " . (isPrime($number2) ? 'Да' : 'Нет'); // Выведет: 15 - простое число? Нет
echo "\n";
?>
