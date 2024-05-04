
<!DOCTYPE html>
<?php
require_once '../Controller/readController.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Task</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="../Controller/readController.php" method="post">

                            <div class="page-header">
                                <h1>View Task</h1>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <p class="form-control-static"><?php echo $row["Title"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <p class="form-control-static"><?php echo $row["Description"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Due Date</label>
                                <p class="form-control-static"><?php echo $row["Due_Date"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <p class="form-control-static"><?php echo $row["Status"]; ?></p>
                            </div>
                            <p><a href="../index.php" class="btn btn-primary">Back</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>