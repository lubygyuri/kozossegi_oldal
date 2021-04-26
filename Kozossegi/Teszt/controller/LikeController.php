<?php


class LikeController extends DB{

    public function increaseBejegyzesLike(Like $like) {
        $sql = "INSERT INTO BEJEGYZES_LIKE (bejegyzes_azonosito, felhasznalo_azonosito) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$like->getBejegyzesAzonosito(), $like->getFelhasznaloAzonosito()]);
    }

    public function decreaseBejegyzesLike(Like $like) {
        $sql = "DELETE FROM BEJEGYZES_LIKE WHERE bejegyzes_azonosito = ? AND felhasznalo_azonosito = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$like->getBejegyzesAzonosito(), $like->getFelhasznaloAzonosito()]);
    }

    public function alreadyLikedPost(Like $like) {
        $sql = "SELECT felhasznalo_azonosito FROM BEJEGYZES_LIKE WHERE bejegyzes_azonosito = ? AND felhasznalo_azonosito = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$like->getBejegyzesAzonosito(), $like->getFelhasznaloAzonosito()]);
        return $stmt->fetch();
    }

    public function isPostLiked(Like $like) {
        $sql = "SELECT bejegyzes_azonosito FROM BEJEGYZES_LIKE WHERE bejegyzes_azonosito = ? AND felhasznalo_azonosito = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$like->getBejegyzesAzonosito(), $like->getFelhasznaloAzonosito()]);
        return $stmt->fetch();
    }
}