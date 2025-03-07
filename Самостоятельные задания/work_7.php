<?php
function getStringLength(string $string): int
{
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

// Пример использования:
$string = "Hello world!";
$length = getStringLength($string);
echo "Длина строки '{$string}': " . $length; // Выведет: Длина строки 'Hello world!': 12
echo "\n";
?>
