<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>

    <form action="add_task.php" method="post">
        <label for="task">Nova Tarefa:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php
        require_once 'tasks.php';
        $tasks = getAllTasks();

        foreach ($tasks as $task) {
            echo "<li>";
            echo "<input type='checkbox' " . ($task['completed'] ? 'checked' : '') . ">";
            echo "{$task['description']}";
            echo "</li>";
        }
        ?>
    </ul>

</body>
</html>
