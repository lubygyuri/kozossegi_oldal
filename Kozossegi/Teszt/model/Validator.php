<?php


class Validator extends DB {

    public function minimalisHossz($mezoErteke, $hossz, $mezoNeve) {
        if (strlen($mezoErteke) < $hossz) {
            return 'A(z) ' . strtolower($mezoNeve) . ' legalább ' . $hossz . ' hosszú kell legyen!';
        }

        return '';
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
        $success = $stmt->execute([$email]);

        if (!$success) {
            return 'Ez az e-mail cím már foglalt!';
        }

        return '';
    }

}