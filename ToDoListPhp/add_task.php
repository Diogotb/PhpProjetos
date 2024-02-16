<?php
require_once 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['task'];
    addTask($description);
    header('Location: index.html');
}
?>