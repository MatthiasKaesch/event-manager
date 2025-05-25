<?php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/Repository/EventRepository.php';

$repo = new EventRepository($pdo);

$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? '';
$tag = $_POST['tag'] ?? '';
$desc = $_POST['description'] ?? '';
$speakers = $_POST['speakers'] ?? '';
$date = $_POST['start_date'] ?? '';

if ($id && $title && $tag && $desc && $speakers && $date) {
    $repo->update((int)$id, $title, $tag, $desc, $speakers, $date);
    header('Location: index.php?updated=1');
    exit;
} else {
    echo "Bitte alle Felder ausfüllen.";
}
