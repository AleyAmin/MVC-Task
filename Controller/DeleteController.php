<?php

if (isset($_POST["Title"]) && !empty($_POST["Title"])) {
    $Title == $_POST["Title"];
    require_once '../Model/DeleteClass.php';
    $delete = new DeleteClass();
    if ($delete->delete($Title)) {
        header("location: ../index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    if (empty(trim($_GET["Title"]))) {
        header("location: error.php");
        exit();
    }
}
?>
