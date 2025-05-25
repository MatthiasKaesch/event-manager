<?php
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/Repository/EventRepository.php';

$id = $_GET['id'] ?? null;
$repo = new EventRepository($pdo);
$event = $repo->findById((int) $id);

if (!$event) {
    die('Event nicht gefunden.');
}
?>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $event['id'] ?>">

    <label>Titel:
        <input type="text" name="title" value="<?= htmlspecialchars($event['title']) ?>" required>
    </label>
    <label>Tag:
        <input type="text" name="tag" value="<?= htmlspecialchars($event['tag']) ?>" required>
    </label>
    <label>Beschreibung:
        <textarea name="description" required><?= htmlspecialchars($event['description']) ?></textarea>
    </label>
    <label>Speaker(s):
        <input type="text" name="speakers" value="<?= htmlspecialchars($event['speakers']) ?>" required>
    </label>
    <label>Datum:
        <input type="date" name="start_date" value="<?= $event['start_date'] ?>" required>
    </label>

    <button type="submit">Änderung speichern</button>
</form>
