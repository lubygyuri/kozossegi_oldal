<?php


class BejegyzesController extends DB{

    public function getPostsByUserId($userId) {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES, LUBLO.FELHASZNALO WHERE LUBLO.BEJEGYZES.FELHASZNALO_AZONOSITO = LUBLO.FELHASZNALO.AZONOSITO AND LUBLO.FELHASZNALO.AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userId]);

        return $stmt->fetchAll();
    }
    public function getPostAll() {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES ORDER BY azonosito desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function createPost(Bejegyzes $bejegyzes) {
        $sql = "INSERT INTO LUBLO.BEJEGYZES (azonosito, uzenet, letrehozas_datuma, felhasznalo_azonosito, kep) VALUES (2, ?, CURRENT_DATE, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$bejegyzes->getUzenet(),$bejegyzes->getFelhasznaloAzonosito(),$bejegyzes->getKep()]);
    }

}