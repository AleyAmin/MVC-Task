<?php
require_once 'Model/ReadClass.php';
$read = new ReadClass();
$result = $read->readAll();
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Description</th>";
    echo "<th>Due Date</th>";
    echo "<th>Status</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Title'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['Due_Date'] . "</td>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "<td>";
        echo "<a href='view/read.php?Title=" . $row['Title'] . "' title='View Task' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
        echo "<a href='View/update.php?Title=" . $row['Title'] . "' title='Update Task' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
        echo "<a href='View/delete.php?Title=" . $row['Title'] . "' title='Delete Task' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    mysqli_free_result($result);
} else {
    echo "<p class='lead'><em>No Tasks were found.</em></p>";
}
?>