<?php

class KlubBejegyzesController extends DB{

    public function getPostsByKlubAzonosito($klubAzonossito) {
        $sql = "SELECT * FROM LUBLO.KLUB_BEJEGYZES, LUBLO.KLUB WHERE LUBLO.KLUB_BEJEGYZES.KLUB_AZONOSITO = LUBLO.KLUB.NEV AND LUBLO.KLUB.NEV = ? ORDER BY LETREHOZAS_DATUMA desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$klubAzonossito]);
        return $stmt->fetchAll();
    }
}