<?php


class KlubController extends DB {

    public function getKlubAll() {
        $sql = "SELECT * FROM LUBLO.KLUB ORDER BY LETREHOZAS_DATUMA desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}