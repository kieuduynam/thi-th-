<?php
require_once 'Database.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUserByUsernameAndPassword($username, $password) {
        $query = "SELECT * FROM User WHERE TenUser = ? AND MatKhau = ?";
        $params = array($username, $password);
        $user = $this->db->executeQuery($query, $params);

        return $user;
    }
}
?>
