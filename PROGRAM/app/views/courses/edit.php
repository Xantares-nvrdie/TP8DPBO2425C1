<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
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
    <form method="post" action="<?= BASEURL ?>courses/update/<?= $data['id'] ?>">
        <div class="card">
            <div class="card-header bg-warning"><h1 class="text-white text-center">Edit Course</h1></div>
            <div class="card-body">

                <label>Lecturer:</label>
                <select name="lecturer_id" class="form-control" required>
                    <?php foreach ($lecturers as $l): ?>
                        <option value="<?= $l['id'] ?>" <?= ($l['id'] == $data['lecturer_id']) ? 'selected' : '' ?>>
                            <?= $l['id'] ?> - <?= htmlspecialchars($l['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label>Course Name:</label>
                <input type="text" name="course_name" value="<?= htmlspecialchars($data['course_name']) ?>" class="form-control" required><br>

                <label>Course Code:</label>
                <input type="text" name="course_code" value="<?= htmlspecialchars($data['course_code']) ?>" class="form-control" required><br>

                <label>Semester:</label>
                <input type="text" name="semester" value="<?= htmlspecialchars($data['semester']) ?>" class="form-control" required><br>

                <button class="btn btn-success">Update</button>
                <a href="<?= BASEURL ?>courses" class="btn btn-info">Cancel</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
