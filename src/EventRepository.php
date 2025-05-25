<?php

class EventRepository {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findAll() {
        return $this->pdo->query("SELECT * FROM events ORDER BY start_date ASC")->fetchAll();
    }

    public function create($title, $tag, $desc, $speakers, $date) {
        $stmt = $this->pdo->prepare("INSERT INTO events  (title, tag, description, speakers, start_date) VALUES (:title, :tag, :desc, :speakers, :date)");
        return $stmt->execute(["title" => $title, "tag" => $tag, "desc" => $desc, "speakers" => $speakers, "date" => $date]);
    }

    public function delete(int $id): bool  {
        $stmt = $this->pdo->prepare("DELETE FROM events WHERE id = :id");
        return $stmt->execute(["id" => $id]);
    }
}


