<!DOCTYPE html>
<html>
<head>
    <title>Create Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= BASEURL ?>assets/bootstrap.min.css">
    <script src="<?= BASEURL ?>assets/jquery.min.js"></script>
    <script src="<?= BASEURL ?>assets/popper.min.js"></script>
    <script src="<?= BASEURL ?>assets/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL ?>lecturers">Lecturers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>lecturers">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= BASEURL ?>research">Research</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="col-lg-6 m-auto mt-4">
    <form method="post" action="<?= BASEURL ?>research/store">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create Research</h1>
            </div>

            <div class="card-body">

                <!-- Lecturer Dropdown -->
                <label>Lecturer:</label>
                <select name="lecturer_id" class="form-control" required>
                    <option value="" disabled selected>-- Choose Lecturer --</option>
                    <?php foreach ($lecturers as $l): ?>
                        <option value="<?= $l['id'] ?>">
                            <?= $l['id'] ?> - <?= htmlspecialchars($l['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <br>

                <!-- Title -->
                <label>Title:</label>
                <input type="text" name="title" class="form-control" required> 
                <br>

                <!-- Year -->
                <label>Year:</label>
                <input type="number" name="year" class="form-control" required> 
                <br>

                <!-- Funding -->
                <label>Funding:</label>
                <input type="text" name="funding" class="form-control"> 
                <br>

                <button class="btn btn-success" type="submit">Submit</button>
                <a href="<?= BASEURL ?>research" class="btn btn-info">Cancel</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>
