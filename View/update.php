<?php
require_once '../Controller/updateController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
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
                    <div class="page-header">
                        <h2>Update Task</h2>
                    </div>
                    <p>Please edit the input values and submit to update the task.</p>
                    <form action="../Controller/updateController.php" method="post">

                        <div class="form-group <?php echo (!empty($Title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="Title" class="form-control" maxlength="50" value="<?php echo $Title; ?>" required>
                            <span class="help-block"><?php echo $Title_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea type="text" name="Description" class="form-control" maxlength="150" required> <?php echo $Description; ?></textarea>
                            <span class="help-block"><?php echo $Description_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($DueDate_err)) ? 'has-error' : ''; ?>">
                            <label>Due Date</label>
                            <input type="date" name="DueDate" class="form-control" value="<?php echo $DueDate; ?>" required>
                            <span class="help-block"><?php echo $DueDate_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Status_err)) ? 'has-error' : ''; ?>">
                            <label>Status</label>
                            <select class="form-control" name="Status" value="<?php echo $Status; ?>" required>
                                <option value="Pending">Pending</option>
                                <option value="In-progress">In-progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <span class="help-block"><?php echo $Status_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>