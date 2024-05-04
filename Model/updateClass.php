<?php

require_once 'Database.php';

class updateClass
{
    private $db;
    private $link;

    public function __construct()
    {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function update($Title, $Description, $DueDate, $Status)
    {
        $sql = "UPDATE tasks SET Title=?, Description=?, Due_Date=?, Status=? WHERE Title=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {

            mysqli_stmt_bind_param($stmt, "sssss", $Title, $Description, $DueDate, $Status, $Title);

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
