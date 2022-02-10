<?php include "view/_partials/head.view.php"; ?>

    <h1>TODO app</h1>
    <a href="/add-task">New Task</a>
    <h2>Task list</h2>
    <ul>
        <?php foreach ($tasks->allTasks() as $task): ?>
        <li class="ongoingsTasks">
            <?=$task['subject'];?>
            <?=$task['priority'];?>
            <?=$task['status'];?>
            <?=$task['dueDate'];?>
            <a href="/delete/<?=$task['id'];?>">Delete</a>
            <a href="/complete/<?=$task['id'];?>">Set as complete</a>

        </li>
        <?php endforeach; ?>
    </ul>
    
<?php include "view/_partials/end.view.php"; ?>
