<?php


class IsmerosController extends DB {

    public function addFriend(Ismeros $ismeros) {
        $sql = "INSERT INTO LUBLO.ISMEROS (statusz, felhasznalo1, felhasznalo2) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getStatusz(), $ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2()]);
    }

    public function acceptFriendRequest() {

    }

    public function removeFriend() {

    }

    public function bela(Ismeros $ismeros) {
        $sql = "SELECT * FROM LUBLO.ISMEROS WHERE felhasznalo1 = ? AND felhasznalo2 = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2()]);
        return $stmt->fetch();
    }

    public function juli(Ismeros $ismeros) {
        $sql = "SELECT * FROM LUBLO.ISMEROS WHERE felhasznalo2 = ? AND felhasznalo1 = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2()]);
        return $stmt->fetch();
    }

}