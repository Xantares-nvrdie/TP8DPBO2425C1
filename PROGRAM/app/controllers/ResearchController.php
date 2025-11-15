<?php
require_once __DIR__ . "/../models/Research.php";
require_once __DIR__ . "/../models/Lecturer.php"; 

class ResearchController {

    function index() {
        $research = new Research();
        $data = $research->getAll();
        include "../app/views/research/index.php";
    }

    function create() {
        $lecturer = new Lecturer();
        $lecturers = $lecturer->getAll(); // dropdown dosen
        include "../app/views/research/create.php";
    }

    function store($post) {
        $research = new Research();
        $research->insert($post);
        header("Location: " . BASEURL . "research");
    }

    function edit($id) {
        $research = new Research();
        $data = $research->getById($id);

        $lecturer = new Lecturer();
        $lecturers = $lecturer->getAll(); // untuk dropdown terpilih
        include "../app/views/research/edit.php";
    }

    function update($id, $post) {
        $research = new Research();
        $research->update($id, $post);
        header("Location: " . BASEURL . "research");
    }

    function delete($id) {
        $research = new Research();
        $research->delete($id);
        header("Location: " . BASEURL . "research");
    }
}
