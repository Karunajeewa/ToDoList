<?php

$db = mysqli_connect('localhost','root','','todo');
$errors = "";


if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if(empty($task)){
        $errors = "You must fill in the task";
        header('location: index.php');
    }
    else{
        mysqli_query($db,"INSERT INTO task(task) VALUES ('$task')");
        header('location: index.php');
    }
}

$tasks = mysqli_query($db,"SELECT * FROM task");

if(isset($_GET['del_task'])){
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM task WHERE Id=$id");
    header('location: index.php');
}







?>