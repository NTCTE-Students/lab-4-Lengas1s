<?php

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Вызов функции
$result = factorial(5);
print("Факториал 5: {$result}");