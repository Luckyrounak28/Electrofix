<?php
class Database {
    private $host = "localhost";
    private $db_name = "electrofix";
    private $username = "root";  // Change if necessary
    private $password = "";      // Change if necessary
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Database error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
