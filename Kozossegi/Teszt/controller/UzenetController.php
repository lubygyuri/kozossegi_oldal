<?php


class UzenetController extends DB {
    public function getUzenetekForSelectedUser($kuldoAzonosito, $fogadoAzonosito) {
        $sql = "SELECT * FROM UZENET WHERE KULDO_AZONOSITO = ? AND FOGADO_AZONOSITO = ? OR KULDO_AZONOSITO = ? AND FOGADO_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$kuldoAzonosito, $fogadoAzonosito, $fogadoAzonosito, $kuldoAzonosito]);
        return $stmt->fetchAll();
    }
}