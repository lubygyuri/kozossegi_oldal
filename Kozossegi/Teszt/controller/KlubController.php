<?php


class KlubController extends DB {

    public function getKlubAll($felhasznalo) {
        $sql = "SELECT * FROM LUBLO.KLUB,LUBLO.KLUB_TAGOK WHERE KLUB_TAGOK.KLUB_AZONOSITO=KLUB.NEV AND KLUB_TAGOK.FELHASZNALO_AZONOSITO=? ORDER BY LETREHOZAS_DATUMA desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$felhasznalo]);
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

    public function getKlubTagok($klubAzonossito) {
        $sql = "SELECT FELHASZNALO.VEZETEKNEV,FELHASZNALO.KERESZTNEV FROM FELHASZNALO where FELHASZNALO.EMAIL IN (SELECT FELHASZNALO_AZONOSITO FROM LUBLO.KLUB_TAGOK WHERE LUBLO.KLUB_TAGOK.KLUB_AZONOSITO = ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito]);
        return $stmt->fetchAll();
    }
    public function getKlubTag($klubAzonossito,$felhasznalo_azonosito){
        $sql= "SELECT FELHASZNALO.VEZETEKNEV,FELHASZNALO.KERESZTNEV FROM FELHASZNALO where FELHASZNALO.EMAIL=(SELECT FELHASZNALO_AZONOSITO FROM LUBLO.KLUB_TAGOK WHERE LUBLO.KLUB_TAGOK.KLUB_AZONOSITO = ? AND LUBLO.KLUB_TAGOK.FELHASZNALO_AZONOSITO = ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito,$felhasznalo_azonosito]);
        return $stmt->fetch();
    }

    public function getKlubTagSzam(){

    }

    public function createKlubTag($klubAzonossito,$felhasznaloazonosito){
        $sql= "INSERT INTO LUBLO.KLUB_TAGOK (klub_azonosito,felhasznalo_azonosito) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito, $felhasznaloazonosito]);
    }

    public function deleteKlubTag($klubAzonossito,$felhasznaloazonosito){
        $sql= "DELETE FROM LUBLO.KLUB_TAGOK WHERE klub_azonosito = ? AND felhasznalo_azonosito = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito, $felhasznaloazonosito]);
    }


}