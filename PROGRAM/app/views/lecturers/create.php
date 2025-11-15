<!DOCTYPE html>
<html>
<head>
    <title>Create Lecturer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= BASEURL ?>assets/bootstrap.min.css">
    <script src="<?= BASEURL ?>assets/jquery.min.js"></script>
    <script src="<?= BASEURL ?>assets/popper.min.js"></script>
    <script src="<?= BASEURL ?>assets/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= BASEURL ?>lecturers">Lecturers</a>
</nav>

<div class="col-lg-6 m-auto mt-4">
    <form method="post" action="<?= BASEURL ?>lecturers/store">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create Lecturer</h1>
            </div>
            <div class="card-body">

                <label>Name:</label>
                <input type="text" name="name" class="form-control" required><br>

                <label>NIDN:</label>
                <input type="text" name="nidn" class="form-control" required><br>

                <label>Phone:</label>
                <input type="text" name="phone" class="form-control" required><br>

                <label>Join Date:</label>
                <input type="date" name="join_date" class="form-control" required><br>

                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-info" href="<?= BASEURL ?>lecturers">Cancel</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
