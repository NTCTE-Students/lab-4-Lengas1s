<?php
function generateRandomPassword(int $length): string
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}

// Пример использования:
$passwordLength = 12;
$password = generateRandomPassword($passwordLength);
echo "Случайный пароль длиной {$passwordLength}: " . $password; // Выведет: Случайный пароль длиной 12: (случайный пароль)
echo "\n";
?>
