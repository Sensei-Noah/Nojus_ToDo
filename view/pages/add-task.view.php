<?php include "view/_partials/head.view.php"; ?>

    <h1>New Task</h1>
    <form method="post" class="">
        <input type="text" name="subject" placeholder="Task Name">
        <select name="priority">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <label>Pick a date</label>
        <input type="date" name="dueDate">
        <button type="submit" name="save">Save</button>
    </form>
    
<?php include "view/_partials/end.view.php"; ?>
