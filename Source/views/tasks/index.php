<?php require 'views/layouts/top.php'?>
<header>
<h1>Tasks</h1>
<ul>
<?php foreach ($tasks as $task): ?>
    <li><strong>Description</strong> - <?=$task->description;?></li>
    <li><strong>Status</strong> - <?=$task->status;?></li>
    <li><strong>Date_start</strong> - <?=$task->date_start;?></li>
    <li><strong>Date_end</strong> - <?=$task->date_end;?></li>
    <li><a href="delete?id=<?php echo $task->id; ?>">DELETE</a></li>
    <hr>
<?php endforeach;?>
</ul>
</header>

<section>
    <h1>Name Task</h1>
    <form action="/tasks" method="post">
        <textarea name="description" cols="30" rows="3"></textarea>
        <div class="seclect-option">
            <span>Chose</span>
            <select name="status">
                <option>New</option>
                <option>Inprocess</option>
                <option>Completed</option>
            </select>
        </div>
        <div>
            <span> Day Start</span>
            <input type="date" name="date_start">
        </div>
        <div>
            <span> Day End</span>
            <input type="date" name="date_end">
        </div>
        <input type="submit" value="Submit">
    </form>
</section>

<?php require 'views/layouts/bottom.php'?>