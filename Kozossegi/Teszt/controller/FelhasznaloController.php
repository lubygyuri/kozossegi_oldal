<?php


class FelhasznaloController extends DB {

    public function getUserFromDB($email) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }

    public function registration(Felhasznalo $felhasznalo) {
        $sql = "INSERT INTO LUBLO.FELHASZNALO (azonosito, email, jelszo, vezeteknev, keresztnev, szuletesi_datum, neme, csatlakozas_datuma, profilkep) VALUES (1, ?, ?, ?, ?, to_date(?, 'YYYY-MM-DD'), ?, CURRENT_DATE, ?)";
        $stmt = $this->connect()->prepare($sql);
        $hashed_jelszo = password_hash($felhasznalo->getJelszo(), PASSWORD_DEFAULT);
        $stmt->execute([$felhasznalo->getEmail(), $hashed_jelszo, $felhasznalo->getVezeteknev(), $felhasznalo->getKeresztnev(),$felhasznalo->getSzuletesiDatum(), $felhasznalo->getNeme(), $felhasznalo->getProfilkep()]);
    }

    public function login(Felhasznalo $felhasznalo) {
        $user = $this->getUserFromDB($felhasznalo->getEmail());
//        Visszaadja az adott felhasználót
        return $user;
    }

    public function getFelhasznalo($userId) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetch();
    }



}