<?php


class CsoportController extends DB {


    public function createCsoport($nev,$admin) {
        $sql = "INSERT INTO CSOPORT (nev,admin_felhasznalo) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nev,$admin]);
        return $stmt->fetchAll();
    }

    public function getAllCsoportWhereAdmin($email) {
        $sql = "SELECT * FROM CSOPORT WHERE admin_felhasznalo = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetchAll();
    }

    public function getAllCsoportWhereGuest($email) {
        $sql = "SELECT * FROM CSOPORT WHERE azonosito IN (SELECT csoport_azonosito FROM CSOPORT_TAGOK WHERE felhasznalo_azonosito = ?)";
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

    public function getUzenetekForSelectedCsoport($csoportAzonosito) {
        $sql = "SELECT * FROM CSOPORT_UZENET WHERE CSOPORT_UZENET.CSOPORT_AZONOSITO = ? ORDER BY KULDES_IDEJE";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$csoportAzonosito]);
        return $stmt->fetchAll();
    }

    public function createMessage(CsoportUzenet $uzenet) {
        $sql = "INSERT INTO CSOPORT_UZENET (uzenet, kuldes_ideje, kuldo_azonosito, csoport_azonosito) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uzenet->getUzenet(), $uzenet->getKuldoAzonosito(), $uzenet->getCsoportAzonosito()]);
    }

    public function getCsoportTag($kuldoAzonosito) {
        $sql = "SELECT FELHASZNALO.VEZETEKNEV,FELHASZNALO.KERESZTNEV FROM FELHASZNALO where email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$kuldoAzonosito]);
        return $stmt->fetch();
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

    public function getLatestGroupMessagesByEmail() {
        $sql = "SELECT * FROM CSOPORT_UZENET WHERE KULDES_IDEJE IN(SELECT MAX(kuldes_ideje) FROM CSOPORT_UZENET GROUP BY csoport_azonosito)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}