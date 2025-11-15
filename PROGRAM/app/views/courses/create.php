<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
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
    <form method="post" action="<?= BASEURL ?>courses/store">
        <div class="card">
            <div class="card-header bg-primary"><h1 class="text-white text-center">Create Course</h1></div>
            <div class="card-body">

                <label>Lecturer:</label>
                <select name="lecturer_id" class="form-control" required>
                    <option disabled selected>-- Choose Lecturer --</option>
                    <?php foreach ($lecturers as $l): ?>
                        <option value="<?= $l['id'] ?>">
                            <?= $l['id'] ?> - <?= htmlspecialchars($l['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label>Course Name:</label>
                <input type="text" name="course_name" class="form-control" required><br>

                <label>Course Code:</label>
                <input type="text" name="course_code" class="form-control" required><br>

                <label>Semester:</label>
                <input type="text" name="semester" class="form-control" required><br>

                <button class="btn btn-success">Submit</button>
                <a href="<?= BASEURL ?>courses" class="btn btn-info">Cancel</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
