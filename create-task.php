<?php
require_once "./TaskModel.php";

$model = new TaskModel();
$model->Create(htmlentities($_POST["task_message"]));

echo "Task created!";

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}

?>