<?php


class ErtesitesekController extends DB {
    public function getErtesitesekByEmail($sessionEmail) {
        $sql = "SELECT * FROM LUBLO.ERTESITESEK WHERE FELHASZNALO_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionEmail]);

        return $stmt->fetchAll();
    }

    public function deleteErtesitesByAzonosito($ertesitesAzonosito) {
        $sql = "DELETE FROM LUBLO.ERTESITESEK WHERE AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ertesitesAzonosito]);
    }

    public function getErtesitesekSzamaByEmail($sessionEmail) {
        $sql = "SELECT COUNT(*) FROM ERTESITESEK WHERE FELHASZNALO_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionEmail]);
        return $stmt->fetch();
    }
}