<?php

$Title = $Description = $DueDate = $Status = "";
$Title_err = $Description_err = $DueDate_err = $Status_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_Title = trim($_POST["Title"]);
    if (empty($input_Title)) {
        $Title_err = "Please enter a Title.";
    } else {
        $Title = $input_Title;
    }

    $input_Description = trim($_POST["Description"]);
    if (empty($input_Description)) {
        $Description_err = "Please enter an Description.";
    } else {
        $Description = $input_Description;
    }

    $input_DueDate = trim($_POST["DueDate"]);
    if (empty($input_DueDate)) {
        $DueDate_err = "Please enter the DueDate.";
    } else {
        $DueDate = $input_DueDate;
    }

    $input_Status = trim($_POST["Status"]);
    if (empty($input_Status)) {
        $Status_err = "Please Choose the Status.";
    } else {
        $Status = $input_Status;
    }

    if (empty($Title_err) && empty($Description_err) && empty($DueDate_err) && empty($Status_err)) {
        require_once '../Model/CreateClass.php';
        $creator = new CreateClass();
        if ($creator->insertRecord($Title, $Description, $DueDate , $Status)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
}
?>