<?php
if (isset($_GET["Title"]) && !empty(trim($_GET["Title"]))) {
    $Title = trim($_GET["Title"]);

    require_once '../Model/ReadClass.php';
    $reader = new ReadClass();
    if ($row = $reader->readOneRecord($Title)) {
        $Tile = $row["Title"];
        $Description = $row["Description"];
        $DueDate = $row["Due_Date"];
        $Status = $row["Status"];
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    header("location: error.php");
    exit();
}
?>