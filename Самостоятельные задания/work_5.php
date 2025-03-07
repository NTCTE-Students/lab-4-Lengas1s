<?php
function convertToUpperCase(string $string): string
{
    return strtoupper($string); // Используем встроенную функцию strtoupper
}

// Пример использования:
$string = "строка в нижнем регистре";
$upperCaseString = convertToUpperCase($string);
echo "Строка в верхнем регистре: " . $upperCaseString; // Выведет: Строка в верхнем регистре: СТРОКА В ВЕРХНЕМ РЕГИСТРЕ
echo "\n";
?>
