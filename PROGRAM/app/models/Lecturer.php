<?php
require_once __DIR__ . "/../core/Database.php";

class Lecturer extends Database {
    function getAll() {
        return $this->fetchAll("SELECT * FROM lecturers");
    }
    function getById($id) {
        return $this->fetchOne("SELECT * FROM lecturers WHERE id = $id");
    }
    function insert($data) {
        $q = "INSERT INTO lecturers (name, nidn, phone, join_date)
                VALUES ('{$data['name']}', '{$data['nidn']}', '{$data['phone']}', '{$data['join_date']}')";
        return $this->execute($q);
    }
    function update($id, $data) {
        $q = "UPDATE lecturers SET name='{$data['name']}', nidn='{$data['nidn']}', phone='{$data['phone']}', join_date='{$data['join_date']}'
                WHERE id=$id";
        return $this->execute($q);
    }
    function delete($id) {
        return $this->execute("DELETE FROM lecturers WHERE id = $id");
    }
}
