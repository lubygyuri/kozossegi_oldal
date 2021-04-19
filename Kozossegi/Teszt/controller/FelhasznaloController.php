<?php


class FelhasznaloController extends DB {

    protected function getUserFromDB($email) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch();
    }

    public function registration(Felhasznalo $felhasznalo) {
        $sql = "INSERT INTO LUBLO.FELHASZNALO (azonosito, email, jelszo, vezeteknev, keresztnev, szuletesi_datum, neme, csatlakozas_datuma) VALUES (3, ?, ?, ?, ?, to_date(?, 'YYYY-MM-DD'), ?, CURRENT_DATE)";
        $stmt = $this->connect()->prepare($sql);
        $hashed_jelszo = password_hash($felhasznalo->getJelszo(), PASSWORD_DEFAULT);
        $stmt->execute([$felhasznalo->getEmail(), $hashed_jelszo, $felhasznalo->getVezeteknev(), $felhasznalo->getKeresztnev(),$felhasznalo->getSzuletesiDatum(), $felhasznalo->getNeme()]);
    }

    public function login(Felhasznalo $felhasznalo) {
//        Visszaadja az adott felhasználót egy asszociatív tömbként
        return $this->getUserFromDB($felhasznalo->getEmail());
//        session_start();
//        $_SESSION["email"] = $user[0]["email"];
//        header("Location: ../profile_page.php");
//        exit();
    }

}