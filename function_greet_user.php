<?php

function greetUser($name = 'гость') {
    echo "Привет, {$name}!";
}

// Вызов функции
greetUser();
greetUser('Анна');