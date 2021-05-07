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


    /*
     * SELECT FELHASZNALO.VEZETEKNEV,FELHASZNALO.KERESZTNEV,FELHASZNALO.EMAIL FROM FELHASZNALO where email in (
SELECT felhasznalo2 from ismeros where felhasznalo1 in (
SELECT email FROM felhasznalo where EXTRACT(month FROM szuletesi_datum) = EXTRACT(month FROM SYSDATE) AND  EXTRACT(day FROM szuletesi_datum) = EXTRACT(day FROM SYSDATE)))
     */




}