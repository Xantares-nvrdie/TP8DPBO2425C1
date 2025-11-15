<?php
require_once __DIR__ . "/../models/Course.php";
require_once __DIR__ . "/../models/Lecturer.php";

class CourseController {

    function index() {
        $course = new Course();
        $data = $course->getAll();
        include "../app/views/courses/index.php";
    }

    function create() {
        $lecturer = new Lecturer();
        $lecturers = $lecturer->getAll(); // dropdown
        include "../app/views/courses/create.php";
    }

    function store($post) {
        $course = new Course();
        $course->insert($post);
        header("Location: " . BASEURL . "courses");
    }

    function edit($id) {
        $course = new Course();
        $data = $course->getById($id);

        $lecturer = new Lecturer();
        $lecturers = $lecturer->getAll(); // dropdown
        include "../app/views/courses/edit.php";
    }

    function update($id, $post) {
        $course = new Course();
        $course->update($id, $post);
        header("Location: " . BASEURL . "courses");
    }

    function delete($id) {
        $course = new Course();
        $course->delete($id);
        header("Location: " . BASEURL . "courses");
    }
}
