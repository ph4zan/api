<?php
// Устанавливаем тип содержимого - JSON
header('Content-Type: application/json');

// Проверяем, что метод запроса GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Создаем массив с ответом
    $response = [
        'message' => 'Hello, World!'
    ];

    // Кодируем массив в JSON и выводим
    echo json_encode($response);
} else {
    // Если метод запроса не GET, возвращаем ошибку 405
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}