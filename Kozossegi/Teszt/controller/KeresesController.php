<?php


class KeresesController extends DB {

    public function searchingUsers($keresettSzo) {
        $keresettSzo = '%'.$keresettSzo.'%';
        $sql = "SELECT vezeteknev, keresztnev, email FROM LUBLO.FELHASZNALO WHERE KERESZTNEV LIKE ? OR VEZETEKNEV LIKE ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$keresettSzo, $keresettSzo]);
        return $stmt->fetchAll();
    }
    public function searchingKlub($keresettSzo) {
        $keresettSzo = '%'.$keresettSzo.'%';
        $sql = "SELECT nev FROM LUBLO.KLUB WHERE nev LIKE ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$keresettSzo]);
        return $stmt->fetchAll();
    }

    public function searchingFriends($keresettSzo, $useremail){
        $keresettSzo = '%'.$keresettSzo.'%';
        $sql = "SELECT vezeteknev, keresztnev, email FROM LUBLO.FELHASZNALO WHERE KERESZTNEV LIKE ? OR VEZETEKNEV LIKE ? AND email IN (SELECT felhasznalo2 FROM LUBLO.ismeros WHERE felhasznalo1 = ? AND statusz = 'friends')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$keresettSzo, $keresettSzo, $useremail]);
        return $stmt->fetchAll();
    }

}