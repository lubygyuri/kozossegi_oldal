<?php


class UzenetController extends DB {
    public function getUzenetekForSelectedUser($kuldoAzonosito, $fogadoAzonosito) {
        $sql = "SELECT * FROM UZENET WHERE KULDO_AZONOSITO = ? AND FOGADO_AZONOSITO = ? OR KULDO_AZONOSITO = ? AND FOGADO_AZONOSITO = ? ORDER BY KULDES_IDEJE";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$kuldoAzonosito, $fogadoAzonosito, $fogadoAzonosito, $kuldoAzonosito]);
        return $stmt->fetchAll();
    }

    public function createMessage(Uzenet $uzenet) {
        $sql = "INSERT INTO UZENET (uzenet, kuldes_ideje, kuldo_azonosito, fogado_azonosito) VALUES (?, CURRENT_TIMESTAMP, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uzenet->getUzenet(), $uzenet->getKuldoAzonosito(), $uzenet->getFogadoAzonosito()]);
    }

    public function getLatestMessagesByEmail($aktualisSessionEmail) {
        $sql = "SELECT UZENET, KULDO_AZONOSITO, KULDES_IDEJE FROM UZENET WHERE KULDES_IDEJE IN (SELECT MAX(kuldes_ideje) FROM UZENET WHERE fogado_azonosito = ? GROUP BY kuldo_azonosito)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$aktualisSessionEmail]);
        return $stmt->fetchAll();
    }
}