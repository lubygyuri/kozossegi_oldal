<?php


class Validator extends DB {

    public function minimalisHossz($mezoErteke, $hossz, $mezoNeve) {
        if (strlen($mezoErteke) < $hossz) {
            return 'A(z) ' . strtolower($mezoNeve) . ' legalább ' . $hossz . ' hosszú kell legyen!';
        }

        return null;
    }

    public function maximalisHossz($mezoErteke, $hossz, $mezoNeve) {
        if (strlen($mezoErteke) > $hossz) {
            return 'A(z) ' . strtolower($mezoNeve) . ' legalább ' . $hossz . ' hosszú kell legyen!';
        }

        return '';
    }

    public function ervenyesEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Érvénytelen e-mail cím!';
        }
        return '';
    }

    public function egyezoJelszavak($jelszo, $jelszoIsmetles) {
        if ($jelszo !== $jelszoIsmetles) {
            return 'A megadott jelszavak nem egyeznek meg!';
        }
        return '';
    }

    public function foglaltEmail($email) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user) {
            return 'Ez az e-mail cím már foglalt!';
        }

        return '';
    }

    public function helyesEmailVagyJelszo($email, $jelszo) {
        $sql = "SELECT * FROM LUBLO.FELHASZNALO WHERE EMAIL = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user) {
            $hashed_user_pwd = $user["JELSZO"];

            $validUser = password_verify($jelszo, trim($hashed_user_pwd));

            if (!$validUser) {
                return 'Nem megfelelő jelszó!';
            }

//            Ha nincs hiba visszetérünk egy üres stringgel.
            return '';
        }

        return 'Nem létezik ilyen e-mail cím!';
    }

}