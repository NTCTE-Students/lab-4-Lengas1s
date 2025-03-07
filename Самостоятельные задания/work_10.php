<?php
function removeDuplicates(array $array): array
{
    return array_unique($array); // Используем встроенную функцию array_unique
}

// Пример использования:
$arrayWithDuplicates = [1, 2, 2, 3, 4, 4, 5];
$arrayWithoutDuplicates = removeDuplicates($arrayWithDuplicates);
echo "Массив без дубликатов: " . implode(", ", $arrayWithoutDuplicates); // Выведет: Массив без дубликатов: 1, 2, 3, 4, 5
echo "\n";
?>
