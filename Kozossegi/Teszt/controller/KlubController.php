<?php


class KlubController extends DB {

    public function getKlubAll() {
        $sql = "SELECT * FROM LUBLO.KLUB ORDER BY LETREHOZAS_DATUMA desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createClub(Klub $klub){
        $sql = "INSERT INTO LUBLO.KLUB (nev, leiras, lathatosag, letrehozas_datuma, admin_felhasznalo) VALUES (?, ?, ?, CURRENT_DATE, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klub->getNev(), $klub->getLeiras(), $klub->getLathatosag(),$klub->getAdminFelhasznalo()]);
    }

    public function getKlub($nev) {
        $sql = "SELECT * FROM LUBLO.KLUB WHERE nev = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nev]);
        return $stmt->fetch();
    }
}