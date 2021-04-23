<?php


class DB {
    private $tns = "(DESCRIPTION = (ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA = (SERVICE_NAME = xe)))";
    private $db_username = "lublo";
    private $db_password = "Xcsetr45";


    protected function connect() {
        $db = "oci:dbname=" . $this->tns . ';charset=UTF8';
        $pdo = new PDO($db, $this->db_username, $this->db_password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}