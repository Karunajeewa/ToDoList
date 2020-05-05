
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>To DO List Application</title>
</head>
<body>
    <div class="heading">
        <h2>To DO List Application with Mysql And PHP</h2>
    </div>
    <form action="connection.php" method="POST">
    <?php
     require_once('connection.php');

        if(isset($errors)){
    ?>
        <p><?php echo $errors; ?></p>
    <?php  } ?>

        <input type="text" class="task_input" name="task">
        <button type="submit" class="task_btn" name="submit">Add Task</button>
    </form>
    <table>
        <thead>
            <tr>
                <td class="number">N</td>
                <td>Task</td>
                <td class="action">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('connection.php');
            session_start();
            $i=1;
            while($row = mysqli_fetch_array($tasks)) { ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td class="task"><?php echo $row['Task']; ?></td>
                <td class="delete">
                    <a href="connection.php?del_task=<?php echo $row['Id']; ?>">X</a>
                </td>
            </tr>

            <?php $i++;  } ?>

        </tbody>
    </table>
</body>
</html>