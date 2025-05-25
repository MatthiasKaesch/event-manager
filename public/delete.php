<?php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/EventRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    $repo = new EventRepository($pdo);
    $repo->delete($id);
}

header('Location: index.php?deleted=1');
exit;