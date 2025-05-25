<?php

require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/Repository/EventRepository.php';

$repo = new EventRepository($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $tag = $_POST['tag'] ?? '';
    $description = $_POST['description'] ?? '';
    $speakers = $_POST['speakers'] ?? '';
    $start_date = $_POST['start_date'] ?? '';

    if ($title && $tag && $description && $speakers && $start_date) {
        $stmt = $pdo->prepare('INSERT INTO events (title, tag, description, speakers, start_date) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$title, $tag, $description, $speakers, $start_date]);
        header('Location: index.php?success=1');
        exit;
    } else {
        echo "Please fill all input fields.";
    }
} else {
    echo "Invalid access. Alarm! Alarm!.";
}