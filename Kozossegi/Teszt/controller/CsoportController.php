<?php


class CsoportController extends DB {


    public function createCsoport($nev,$admin) {
        $sql = "INSERT INTO CSOPORT (nev,admin_felhasznalo) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nev,$admin]);
        return $stmt->fetchAll();
    }

    public function getAllCsoport($email) {
        $sql = "SELECT (azonosito,nev,admin_felhasznalo) FROM CSOPORT,CSOPORT_TAGOK WHERE CSOPORT_AZONOSITO=AZONOSITO AND (admin_felhasznalo = ? OR felhasznalo_azonosito= ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetchAll();
    }
    public function getCsoport($csoportazonosito) {
        $sql = "SELECT * FROM CSOPORT WHERE AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$csoportazonosito]);
        return $stmt->fetchAll();
    }
    public function getUzenetekForSelectedCsoport($csoportazonosito) {
        $sql = "SELECT * FROM CSOPORT_UZENET WHERE CSOPORT_AZONOSITO = ? ORDER BY KULDES_IDEJE";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$csoportazonosito]);
        return $stmt->fetchAll();
    }

    public function createMessage(CsoportUzenet $uzenet) {
        $sql = "INSERT INTO UZENET (uzenet, kuldes_ideje, kuldo_azonosito, csoport_azonosito) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uzenet->getUzenet(), $uzenet->getKuldoAzonosito(), $uzenet->getCsoportAzonosito()]);
    }

    public function getCsoportTag($kuldoAzonosito) {
        $sql = "SELECT FELHASZNALO.VEZETEKNEV,FELHASZNALO.KERESZTNEV FROM FELHASZNALO where email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$kuldoAzonosito]);
        return $stmt->fetchAll();
    }

    public function createCsoportTag($email,$csoportAzonosito){
        $sql = "INSERT INTO LUBLO.csoport_tag (csoport_azonosito, felhasznalo_azonosito) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$csoportAzonosito,$email]);
        return $stmt->fetchAll();
    }
    public function getAllTag($csoportAzonosito){
        $sql = "SELECT * FROM CSOPORT_TAGOK WHERE csoport_azonosito = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$csoportAzonosito]);
        return $stmt->fetchAll();
    }


}