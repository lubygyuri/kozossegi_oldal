<?php


class FelhasznaloController extends DB {

    protected function getUserFromDB($email) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetchAll();
        return $user;
    }

    public function registration(Felhasznalo $felhasznalo) {
        $sql = "INSERT INTO LUBLO.FELHASZNALO (azonosito, email, jelszo, vezeteknev, keresztnev, szuletesi_datum, neme, csatlakozas_datuma) VALUES (2, ?, ?, ?, ?, to_date(?, 'YYYY-MM-DD'), ?, CURRENT_DATE)";
        $stmt = $this->connect()->prepare($sql);
        $hashed_jelszo = password_hash($felhasznalo->getJelszo(), PASSWORD_DEFAULT);
        $stmt->execute([$felhasznalo->getEmail(), $hashed_jelszo, $felhasznalo->getVezeteknev(), $felhasznalo->getKeresztnev(),$felhasznalo->getSzuletesiDatum(), $felhasznalo->getNeme()]);
    }

    public function login(Felhasznalo $felhasznalo) {
        $user = $this->getUserFromDB($felhasznalo->getEmail());
        $hashed_user_pwd = $user[0]["JELSZO"];

        $validUser = password_verify($felhasznalo->getJelszo(), trim($hashed_user_pwd));

//        TODO: Error ha nem egyezik a jelszo

        if ($validUser) {
            return $user[0];
        }

        return null;
//        session_start();
//        $_SESSION["email"] = $user[0]["email"];
//        header("Location: ../profile_page.php");
//        exit();
    }

}