<?php
require_once 'Database.php';

class SachModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTop5Sachs() {
        $query = "SELECT * FROM Sach LIMIT 5";
        $sachs = $this->db->executeQuery($query);

        return $sachs;
    }
}
?>
