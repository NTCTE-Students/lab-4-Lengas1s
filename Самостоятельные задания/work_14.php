<?php
function formatDate(string $date): string
{
    $parts = explode('-', $date); // Разделяем дату по '-'
    if (count($parts) != 3) 
        return "Неверный формат даты"; // Проверка формата
    }
    return $parts[2] . '/' . $parts[1] . '/' . $parts[0]; // Собираем в формате DD/MM/YYYY


// Пример использования:
$date = "2023-10-26";
$formattedDate = formatDate($date);
echo "Дата в формате DD/MM/YYYY: " . $formattedDate; // Выведет: Дата в формате DD/MM/YYYY: 26/10/2023
echo "\n";
?>
