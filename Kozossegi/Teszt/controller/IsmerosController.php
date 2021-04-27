<?php


class IsmerosController extends DB {

    public function addFriend(Ismeros $ismeros) {
        $sql = "INSERT INTO LUBLO.ISMEROS (statusz, felhasznalo1, felhasznalo2) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getStatusz(), $ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2()]);
    }

    public function acceptFriendRequest(Ismeros $ismeros) {
        $this->updateStatus($ismeros);
        $this->addFriend($ismeros);
    }

    private function updateStatus(Ismeros $ismeros) {
        $sql = "UPDATE LUBLO.ISMEROS SET statusz = ? WHERE felhasznalo1 = ? AND felhasznalo2 = ? OR felhasznalo1 = ? AND felhasznalo2 = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getStatusz(), $ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2(), $ismeros->getFelhasznalo2(), $ismeros->getFelhasznalo1()]);
    }

    public function declineRequest(Ismeros $ismeros) {
        $sql = "DELETE FROM LUBLO.ISMEROS WHERE felhasznalo1 = ? AND felhasznalo2 = ? OR felhasznalo1 = ? AND felhasznalo2 = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$ismeros->getFelhasznalo1(), $ismeros->getFelhasznalo2(), $ismeros->getFelhasznalo2(), $ismeros->getFelhasznalo1()]);
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