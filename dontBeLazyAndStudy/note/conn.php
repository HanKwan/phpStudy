<?php

class Connection {
    public $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=addNote', 'root', 'hankwansaing');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllNotes() {
        $stmt = $this->pdo->prepare('SELECT * FROM notes ORDER BY created_at DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNote() {
        $stmt = $this->pdo->prepare('INSERT INTO notes (title, body) VALUES (:title, :body)');
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':body', $_POST['body']);
        return $stmt->execute();
    }

    public function sendError() {
        return 'Text cannot be empty';
    }

    public function deleteNote($id) {
        $stmt = $this->pdo->prepare('DELETE FROM notes WHERE id = :id');
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
}

return $connection = new Connection;