<?php
function findSecondLargest(array $numbers): ?int
{
    if (count($numbers) < 2) {
        return null; // Нужно минимум два элемента
    }
    rsort($numbers); // Сортируем массив по убыванию
    $uniqueNumbers = array_unique($numbers); // Удаляем дубликаты, чтобы правильно найти второе *по величине*, а не второе в отсортированном массиве если есть дубликаты.
    if (count($uniqueNumbers) < 2) {
        return null; // Если после удаления дубликатов меньше 2 элементов, второго по величине нет.
    }
    $uniqueNumbers = array_values($uniqueNumbers); // Переиндексация массива после array_unique
    return $uniqueNumbers[1]; // Возвращаем второй элемент отсортированного по убыванию уникального массива
}

// Пример использования:
$numbers = [1, 5, 2, 8, 3, 8];
$secondLargest = findSecondLargest($numbers);
echo "Второе по величине число в массиве: " . $secondLargest; // Выведет: Второе по величине число в массиве: 5
echo "\n";

$numbers2 = [10, 10, 5, 2];
$secondLargest2 = findSecondLargest($numbers2);
echo "Второе по величине число в массиве: " . $secondLargest2; // Выведет: Второе по величине число в массиве: 5
echo "\n";

$numbers3 = [10];
$secondLargest3 = findSecondLargest($numbers3);
echo "Второе по величине число в массиве: " . ($secondLargest3 !== null ? $secondLargest3 : 'не найдено'); // Выведет: Второе по величине число в массиве: не найдено
echo "\n";
?>
