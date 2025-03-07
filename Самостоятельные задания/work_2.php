<?php
function isPalindrome(string $string): bool
{
    $string = strtolower(str_replace(' ', '', $string)); // Удаляем пробелы и приводим к нижнему регистру
    $reversedString = strrev($string);
    return $string === $reversedString;
}

// Пример использования:
$string1 = "level";
$string2 = "hello";
$string3 = "Муха капустуха";

echo "'{$string1}' - палиндром? " . (isPalindrome($string1) ? 'Да' : 'Нет'); // Выведет: 'level' - палиндром? Да
echo "\n";
echo "'{$string2}' - палиндром? " . (isPalindrome($string2) ? 'Да' : 'Нет'); // Выведет: 'hello' - палиндром? Нет
echo "\n";
echo "'{$string3}' - палиндром? " . (isPalindrome($string3) ? 'Да' : 'Нет'); // Выведет: 'Муха капустуха' - палиндром? Да
echo "\n";

?>
