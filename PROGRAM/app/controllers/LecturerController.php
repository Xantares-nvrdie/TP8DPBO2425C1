<?php
require_once __DIR__ . "/../models/Lecturer.php";

class LecturerController {

    function index() {
        $lecturer = new Lecturer();
        $data = $lecturer->getAll();
        include "../app/views/lecturers/index.php";
    }

    function create() {
        include "../app/views/lecturers/create.php";
    }

    function store($post) {
        $lecturer = new Lecturer();
        $lecturer->insert($post);
        header("Location: " . BASEURL . "lecturers");
        exit;
    }

    function edit($id) {
        $lecturer = new Lecturer();
        $data = $lecturer->getById($id);
        include "../app/views/lecturers/edit.php";
    }

    function update($id, $post) {
        $lecturer = new Lecturer();
        $lecturer->update($id, $post);
        header("Location: " . BASEURL . "lecturers");
        exit;
    }

    function delete($id) {
        $lecturer = new Lecturer();
        $lecturer->delete($id);
        header("Location: " . BASEURL . "lecturers");
        exit;
    }
}
