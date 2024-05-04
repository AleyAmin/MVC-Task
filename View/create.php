<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Task</h2>
                    </div>
                    <p>Please fill this form and submit to add task to the database.</p>
                    <form action="../Controller/CreateController.php" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="Title" class="form-control" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="Description" class="form-control" maxlength="150" required></textarea>

                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="date" name="DueDate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="Status" required>
                                <option value="Pending">Pending</option>
                                <option value="In-progress">In-progress</option>
                                <option value="Completed">Completed</option>
                            </select>
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