<?php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/EventRepository.php';

$repo = new EventRepository($pdo);
$events = $repo->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Liste</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1>Event Liste</h1>

      <form action="create.php" method="POST" class="event_form">
        <h2>Add new Event</h2>
        <label>
            Title:
            <input type="text" name="title" required>
        </label>
        <label>
            Tag:
            <input type="text" name="tag" required>
        </label>
        <label>
            Description:
            <textarea name="description" required></textarea>
        </label>
        <label>
            Speaker(s):
            <input type="text" name="speakers" required>
        </label>
        <label>
            Date:
            <input type="date" name="start_date" required>
        </label>
        <button type="submit">Hinzufügen</button>
    </form>
    
    <ul class="event_board">
        <?php foreach ($events as $event): ?>
            <li class="event_card">
                <div class="event_actions">
                    <!-- edit button -->
                    <form method="get" action="edit.php" style="display: inline">
                        <input type="hidden" name="id" value="<?= $event['id'] ?>">
                        <button type="submit" class="edit_button">✏️</button>
                    </form>

                    <!-- delete button -->
                    <form method="post" action="delete.php" onsubmit="return confirm('Wirklich löschen?')" style="display: inline">
                        <input type="hidden" name="id" value="<?= $event['id'] ?>">
                        <button type="submit" class="delete_button">✖</button>
                    </form>
                </div>

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
