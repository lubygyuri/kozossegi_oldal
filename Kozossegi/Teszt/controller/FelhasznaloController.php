<?php


class FelhasznaloController extends DB {

    public function getUserFromDB($email) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }

    public function registration(Felhasznalo $felhasznalo) {
        $sql = "INSERT INTO LUBLO.FELHASZNALO (email, jelszo, vezeteknev, keresztnev, szuletesi_datum, neme, csatlakozas_datuma, profilkep) VALUES (?, ?, ?, ?, to_date(?, 'YYYY-MM-DD'), ?, CURRENT_DATE, ?)";
        $stmt = $this->connect()->prepare($sql);
        $hashed_jelszo = password_hash($felhasznalo->getJelszo(), PASSWORD_DEFAULT);
        $stmt->execute([$felhasznalo->getEmail(), $hashed_jelszo, $felhasznalo->getVezeteknev(), $felhasznalo->getKeresztnev(),$felhasznalo->getSzuletesiDatum(), $felhasznalo->getNeme(), $felhasznalo->getProfilkep()]);
    }

    public function login(Felhasznalo $felhasznalo) {
        $user = $this->getUserFromDB($felhasznalo->getEmail());
//        Visszaadja az adott felhasználót
        return $user;
    }

    public function updateProfileImg($profileImg, $userEmail) {
        $sql = "UPDATE LUBLO.FELHASZNALO SET PROFILKEP = ? WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$profileImg, $userEmail]);
    }

    public function updateProfile(Felhasznalo $felhasznalo) {
        $sql = "UPDATE LUBLO.FELHASZNALO SET VEZETEKNEV = ?, KERESZTNEV = ?, NEME = ?, ISKOLA = ?, MUNKAHELY = ? WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$felhasznalo->getVezeteknev(), $felhasznalo->getKeresztnev(), $felhasznalo->getNeme(), $felhasznalo->getIskola(), $felhasznalo->getMunkahely(), $felhasznalo->getEmail()]);
    }


}