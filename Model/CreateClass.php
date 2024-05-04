<?php
require_once 'Database.php';

class CreateClass {

    private $db;
    private $link;
    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($Title, $Description, $DueDate , $Status) {
        $sql = "INSERT INTO tasks (Title, Description, Due_Date , Status) VALUES (?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($this->link, $sql)) {

            mysqli_stmt_bind_param($stmt, "ssss", $Title, $Description, $DueDate , $Status);

            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($this->link);
        return false;
    }

}
