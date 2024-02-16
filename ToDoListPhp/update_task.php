<?php
require_once 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id'];
    $completed = isset($_POST['completed']) ? true : false;
    updateTask($taskId, $completed);
    header('Location: index.html');
}
?>