<?php


class FenykepAlbumController extends DB {

    public function createFenykepAlbum($albumNeve, $sessionEmail) {
        $sql = "INSERT INTO FENYKEP_ALBUM (nev, felhasznalo_azonosito) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$albumNeve, $sessionEmail]);
    }

}