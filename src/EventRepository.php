<?php

class EventRepository {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findAll() {
        return $this->pdo->query("SELECT * FROM events ORDER BY start_date ASC")->fetchAll();
    }

    public function add($title, $tag, $desc, $speakers, $date) {
        $stmt = $this->pdo->prepare("INSERT INTO events (...) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$title, $tag, $desc, $speakers, $date]);
    }
}
