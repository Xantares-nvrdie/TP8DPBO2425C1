<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= BASEURL ?>assets/bootstrap.min.css">
    <script src="<?= BASEURL ?>assets/jquery.min.js"></script>
    <script src="<?= BASEURL ?>assets/popper.min.js"></script>
    <script src="<?= BASEURL ?>assets/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL ?>lecturers">CAMPUS NIH BOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>lecturers">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= BASEURL ?>courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>research">Research</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Courses List</h2>
        <a href="<?= BASEURL ?>courses/create" class="btn btn-primary">Create Course</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Lecturer</th>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php if (!empty($data)): ?>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['lecturer_id'] ?> - <?= htmlspecialchars($row['lecturer_name']) ?></td>
                    <td><?= htmlspecialchars($row['course_name']) ?></td>
                    <td><?= htmlspecialchars($row['course_code']) ?></td>
                    <td><?= htmlspecialchars($row['semester']) ?></td>
                    <td>
                        <a href="<?= BASEURL ?>courses/edit/<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= BASEURL ?>courses/delete/<?= $row['id'] ?>"
                            onclick="return confirm('Delete this course?')"
                            class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6" class="text-center">No data</td></tr>
        <?php endif; ?>

        </tbody>
    </table>
</div>
</body>
</html>
