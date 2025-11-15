<!DOCTYPE html>
<html>
<head>
    <title>Edit Lecturer</title>
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
    <form method="post" action="<?= BASEURL ?>lecturers/update/<?= $data['id'] ?>">
        <div class="card">
            <div class="card-header bg-warning">
                <h1 class="text-white text-center">Edit Lecturer</h1>
            </div>
            <div class="card-body">

                <label>Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($data['name']) ?>" class="form-control" required><br>

                <label>NIDN:</label>
                <input type="text" name="nidn" value="<?= htmlspecialchars($data['nidn']) ?>" class="form-control" required><br>

                <label>Phone:</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($data['phone']) ?>" class="form-control" required><br>

                <label>Join Date:</label>
                <input type="date" name="join_date" value="<?= htmlspecialchars($data['join_date']) ?>" class="form-control" required><br>

                <button class="btn btn-success" type="submit">Update</button>
                <a class="btn btn-info" href="<?= BASEURL ?>lecturers">Cancel</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
