<?php
function countWords(string $string): int
{
    $words = preg_split('/\s+/', trim($string)); // Разделяем строку по пробелам и обрезаем лишние пробелы
    return count($words);
}

// Пример использования:
$string = "Это строка с несколькими словами";
$wordCount = countWords($string);
echo "Количество слов в строке: " . $wordCount; // Выведет: Количество слов в строке: 4
echo "\n";
?>
