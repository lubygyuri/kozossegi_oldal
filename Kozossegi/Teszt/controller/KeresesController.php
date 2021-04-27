<?php


class KeresesController extends DB {

    public function searchingUsers($keresettSzo) {
        $keresettSzo = '%'.$keresettSzo.'%';
        $sql = "SELECT vezeteknev, keresztnev, email FROM LUBLO.FELHASZNALO WHERE KERESZTNEV LIKE ? OR VEZETEKNEV LIKE ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$keresettSzo, $keresettSzo]);
        return $stmt->fetchAll();
    }

}