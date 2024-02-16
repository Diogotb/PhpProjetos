<?php
require_once 'config.php';

function getAllTasks() {
    global $conn;
    $stmt = $conn->query('SELECT * FROM tasks');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addTask($description) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO tasks (description) VALUES (:description)');
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}

function updateTask($id, $completed) {
    global $conn;
    $stmt = $conn->prepare('UPDATE tasks SET completed = :completed WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':completed', $completed);
    $stmt->execute();
}

function deleteTask($id) {
    global $conn;
    $stmt = $conn->prepare('DELETE FROM tasks WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
?>