<?php


class FenykepAlbumController extends DB {

    public function createFenykepAlbum($albumNeve, $sessionEmail) {
        $sql = "INSERT INTO FENYKEP_ALBUM (nev, felhasznalo_azonosito) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$albumNeve, $sessionEmail]);
    }

    public function getAllAlbumsBySessionEmail($sessionEmail) {
        $sql = "SELECT * FROM FENYKEP_ALBUM WHERE FELHASZNALO_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sessionEmail]);
        return $stmt->fetchAll();
    }

    public function getFenykepAlbumNev($fenykepAlbumAzonosito) {
        $sql = "SELECT nev FROM FENYKEP_ALBUM WHERE AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fenykepAlbumAzonosito]);
        return $stmt->fetch();
    }

//    TODO: átírni
    public function getTotalAlbumSize($fenykepAlbumAzonosito) {
        $sql = "SELECT SUM(meret) AS meret FROM FENYKEPEK WHERE FENYKEP_ALBUM_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fenykepAlbumAzonosito]);
        return $stmt->fetch()["MERET"];
    }

    public function getNumberOfPicturesInAlbum($fenykepAlbumAzonosito) {
        $sql = "SELECT COUNT(*) AS DARAB FROM FENYKEPEK WHERE FENYKEP_ALBUM_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fenykepAlbumAzonosito]);
        return $stmt->fetch()["DARAB"];
    }

}