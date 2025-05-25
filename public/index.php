<?php
require_once __DIR__ . '/../src/db.php';

$events = $pdo->query('SELECT * FROM events ORDER BY start_date ASC')->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Liste</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <h1>Event Liste</h1>
    
    <ul class="event_board">
        <?php foreach ($events as $event): ?>
            <li class="event_card">
                <div class="event_head">
                    <h2 class="event_title">
                        <?= htmlspecialchars($event['title']) ?>
                    </h2>
                    <p class="event_tag">
                        <?= htmlspecialchars($event['tag']) ?>
                    </p> 
                </div>
                <div class="event_desc">
                    <p><?= htmlspecialchars($event['description']) ?></p>
                </div>
                <div class="event_date">
                    <?= date('d.m.Y', strtotime($event['start_date'])) ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
