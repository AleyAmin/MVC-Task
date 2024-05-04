<?php

$Title = $Description = $DueDate = $Status = "";
$Title_err = $Description_err = $DueDate_err = $Status_err = "";

if (isset($_POST["Title"]) && !empty($_POST["Title"])) {

    $Title = $_POST["Title"];

    $input_Title = trim($_POST["Title"]);
    if (empty($input_Title)) {
        $Title_err = "Please enter a Title.";
    } else {
        $Title = $input_Title;
    }

    $input_Description = trim($_POST["Description"]);
    if (empty($input_Description)) {
        $Description_err = "Please enter the Description.";
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
        $Status_err = "Please choose the Status.";
    } else {
        $Status = $input_Status;
    }

    if (empty($Title_err) && empty($Description_err) && empty($DueDate_err) && empty($Status_err)) {
        require_once '../Model/updateClass.php';
        $updator = new updateClass();
        if ($updator->update($Title, $Description, $DueDate, $Status)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
    }

} else {
    if (isset($_GET["Title"]) && !empty(trim($_GET["Title"]))) {
        $Title = trim($_GET["Title"]);
        require_once '../Model/ReadClass.php';
        $reader = new ReadClass();
        if ($row = $reader->readOneRecord($Title)) {
            $Title = $row["Title"];
            $Description = $row["Description"];
            $DueDate = $row["Due_Date"];
            $Status = $row["Status"];
            
        }
        else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        header("location: error.php");
        exit();
    }
}
?>
