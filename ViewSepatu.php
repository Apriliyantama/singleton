<?php

require_once('DatabaseConnection.php');

class ViewSepatu {

    protected PDO $db;
    private static ?ViewSepatu $shoe = null;
    
    public function __construct()
    {
        $this->db = DatabaseConnection::connect();
    }

    public static function shoe(): ViewSepatu
    {
        if (self::$shoe === null) {
            self::$shoe = new ViewSepatu();
        }
        return self::$shoe;
    }

    public function readSepatu() {
        $sql = "SELECT * FROM shoe";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>