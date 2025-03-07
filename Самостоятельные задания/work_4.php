<?php
function sortArray(array $numbers): array
{
    sort($numbers); // Используем встроенную функцию sort для простоты
    return $numbers;
}

// Пример использования:
$numbers = [4, 2, 7, 1, 9, 3];
$sortedNumbers = sortArray($numbers);
echo "Отсортированный массив: " . implode(", ", $sortedNumbers); // Выведет: Отсортированный массив: 1, 2, 3, 4, 7, 9
echo "\n";
?>
