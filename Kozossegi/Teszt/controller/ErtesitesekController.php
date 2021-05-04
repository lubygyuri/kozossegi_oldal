<?php


class ErtesitesekController extends DB {
    public function getErtesitesekByEmail($sessionEmail) {
        $sql = "SELECT * FROM LUBLO.ERTESITESEK WHERE FELHASZNALO_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionEmail]);

        return $stmt->fetchAll();
    }
}