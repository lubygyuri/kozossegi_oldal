<?php


class BejegyzesController extends DB{

    public function getPostsByUserEmail($userEmail) {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES, LUBLO.FELHASZNALO WHERE LUBLO.BEJEGYZES.FELHASZNALO_AZONOSITO = LUBLO.FELHASZNALO.EMAIL AND LUBLO.FELHASZNALO.EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userEmail]);

        return $stmt->fetchAll();
    }
    public function getPostAll() {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES ORDER BY azonosito desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function createPost(Bejegyzes $bejegyzes) {
        $sql = "INSERT INTO LUBLO.BEJEGYZES (azonosito, uzenet, letrehozas_datuma, felhasznalo_azonosito, kep) VALUES (7, ?, CURRENT_DATE, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$bejegyzes->getUzenet(),$bejegyzes->getFelhasznaloAzonosito(),$bejegyzes->getKep()]);
    }

}