<?php
require_once __DIR__ . "/../core/Database.php";

class Research extends Database {

    function getAll() {
        $q = "SELECT research.*, lecturers.name AS lecturer_name
            FROM research
            JOIN lecturers ON research.lecturer_id = lecturers.id";
        return $this->fetchAll($q);
    }
    

    function getById($id) {
        return $this->fetchOne("SELECT * FROM research WHERE id = $id");
    }

    function insert($data) {
        $q = "INSERT INTO research (lecturer_id, title, year, funding)
                VALUES ('{$data['lecturer_id']}', '{$data['title']}', '{$data['year']}', '{$data['funding']}')";
        return $this->execute($q);
    }

    function update($id, $data) {
        $q = "UPDATE research SET title='{$data['title']}', year='{$data['year']}', funding='{$data['funding']}',
                lecturer_id='{$data['lecturer_id']}' WHERE id=$id";
        return $this->execute($q);
    }

    function delete($id) {
        return $this->execute("DELETE FROM research WHERE id = $id");
    }
}
