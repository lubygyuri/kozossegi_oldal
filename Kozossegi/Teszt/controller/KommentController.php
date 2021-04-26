<?php



class KommentController extends DB{
    public function getKommentByBejegyzes($id) {
        $sql = "SELECT * FROM LUBLO.KOMMENT WHERE LUBLO.KOMMENT.BEJEGYZES_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function createKomment(Komment $komment) {
        $sql = "INSERT INTO LUBLO.KOMMENT (uzenet, letrehozas_datuma, felhasznalo_azonosito, bejegyzes_azonosito) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$komment->getUzenet(),$komment->getFelhasznaloAzonosito(),$komment->getBejegyzesAzonosito()]);
    }

}