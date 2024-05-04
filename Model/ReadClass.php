<?php

require_once 'Database.php';

class ReadClass {

    private $db;
    private $link;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function readAll() {
        $sql = "SELECT * FROM tasks";
        
        if ($result = mysqli_query($this->link, $sql)) {
            return $result;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }
    }

    public function readOneRecord($Title) {
        $sql = "SELECT * FROM tasks WHERE Title = ?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $Title);

            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    return $row;
                    
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        mysqli_stmt_close($stmt);

        mysqli_close($this->link);
        }
}
