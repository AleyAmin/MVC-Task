<?php

require_once 'Database.php';

class DeleteClass {
    private $db;
    private $link;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function delete($Title) {
        $sql = "DELETE FROM tasks WHERE Title = ?";
        if ($stmt = mysqli_prepare($this->link , $sql)) {

            $param_Title = trim($_POST["Title"]);

            mysqli_stmt_bind_param($stmt, "s", $param_Title);

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
