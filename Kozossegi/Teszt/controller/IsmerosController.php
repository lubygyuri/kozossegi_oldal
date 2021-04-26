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

}