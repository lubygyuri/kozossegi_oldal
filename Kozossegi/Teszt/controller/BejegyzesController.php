<?php


class BejegyzesController extends DB{

    public function getPostsByUserEmail($userEmail) {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES, LUBLO.FELHASZNALO WHERE LUBLO.BEJEGYZES.FELHASZNALO_AZONOSITO = LUBLO.FELHASZNALO.EMAIL AND LUBLO.FELHASZNALO.EMAIL = ? ORDER BY LETREHOZAS_IDEJE desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userEmail]);

        return $stmt->fetchAll();
    }
    public function getPostAll() {
        $sql = "SELECT * FROM LUBLO.BEJEGYZES ORDER BY LETREHOZAS_IDEJE desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function createPost(Bejegyzes $bejegyzes) {
<<<<<<< HEAD
        $sql = "INSERT INTO LUBLO.BEJEGYZES (azonosito, uzenet, letrehozas_datuma, felhasznalo_azonosito, kep) VALUES (9, ?, CURRENT_DATE, ?, ?)";
=======
        $sql = "INSERT INTO LUBLO.BEJEGYZES (uzenet, letrehozas_ideje, felhasznalo_azonosito, kep) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
>>>>>>> 4add653d0ac314ff9848b972c8a9abbc09c8ec7e
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$bejegyzes->getUzenet(),$bejegyzes->getFelhasznaloAzonosito(),$bejegyzes->getKep()]);
    }

}