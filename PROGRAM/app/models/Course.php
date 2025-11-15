<?php
require_once __DIR__ . "/../core/Database.php";

class Course extends Database {

    function getAll() {
        $q = "SELECT courses.*, lecturers.name AS lecturer_name
                FROM courses
                JOIN lecturers ON courses.lecturer_id = lecturers.id";
        return $this->fetchAll($q);
    }

    function getById($id) {
        return $this->fetchOne("SELECT * FROM courses WHERE id = $id");
    }

    function insert($data) {
        $q = "INSERT INTO courses (lecturer_id, course_name, course_code, semester)
                VALUES ('{$data['lecturer_id']}', '{$data['course_name']}', '{$data['course_code']}', '{$data['semester']}')";
        return $this->execute($q);
    }

    function update($id, $data) {
        $q = "UPDATE courses SET 
                lecturer_id='{$data['lecturer_id']}',
                course_name='{$data['course_name']}',
                course_code='{$data['course_code']}',
                semester='{$data['semester']}'
                WHERE id=$id";
        return $this->execute($q);
    }

    function delete($id) {
        return $this->execute("DELETE FROM courses WHERE id = $id");
    }
}
