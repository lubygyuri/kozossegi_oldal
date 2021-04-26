<?php



class KommentController extends DB{
    public function getKommentByBejegyzes($id) {
        $sql = "SELECT * FROM LUBLO.KOMMENT WHERE LUBLO.KOMMENT.BEJEGYZES_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

}