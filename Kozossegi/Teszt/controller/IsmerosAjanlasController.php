<?php


class IsmerosAjanlasController extends DB {

    public function listIsmerosToIsmeros($email) {
        $sql = "SELECT vezeteknev, keresztnev, email FROM LUBLO.FELHASZNALO WHERE email in 
                (SELECT felhasznalo2 from ismeros where felhasznalo1 in (SELECT felhasznalo2 from ismeros where felhasznalo1=?) AND (felhasznalo2 <> ? )
                MINUS
                (SELECT felhasznalo2 from ismeros where statusz = 'friends' AND felhasznalo1=?) )";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email,$email,$email]);
        return $stmt->fetchAll();
    }

    public function KlubToIsmeros($email) {
        $sql = "SELECT NEV FROM LUBLO.KLUB,KLUB_TAGOK WHERE klub_azonosito=nev AND FELHASZNALO_AZONOSITO IN (SELECT felhasznalo2 from ismeros where felhasznalo1=?)
                MINUS
                (SELECT NEV from KLUB,KLUB_TAGOK where klub_azonosito=nev AND FELHASZNALO_AZONOSITO=?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email,$email]);
        return $stmt->fetchAll();
    }

}