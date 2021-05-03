<?php

class KlubBejegyzesController extends DB{

    public function getPostsByKlubAzonosito($klubAzonossito) {
        $sql = "SELECT * FROM LUBLO.KLUB_BEJEGYZES, LUBLO.KLUB WHERE LUBLO.KLUB_BEJEGYZES.KLUB_AZONOSITO = LUBLO.KLUB.NEV AND LUBLO.KLUB.NEV = ? ORDER BY LETREHOZAS_DATUMA desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito]);
        return $stmt->fetchAll();
    }

    public function createPost(Bejegyzes $bejegyzes) {
        $sql = "INSERT INTO LUBLO.KLUB_BEJEGYZES (uzenet, letrehozas_ideje, felhasznalo_azonosito, klub_azonosito,kep) VALUES (?, CURRENT_TIMESTAMP, ?,?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$bejegyzes->getUzenet(),$bejegyzes->getFelhasznaloAzonosito(),$bejegyzes->getKlubAzonosito(),$bejegyzes->getKep()]);
    }
}