<?php


class FenykepAlbum {
    private $azonosito;
    private $nev;
    private $teljesMeret;
    private $felhasznaloAzonosito;

    /**
     * @return mixed
     */
    public function getAzonosito()
    {
        return $this->azonosito;
    }

    /**
     * @param mixed $azonosito
     */
    public function setAzonosito($azonosito)
    {
        $this->azonosito = $azonosito;
    }

    /**
     * @return mixed
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * @param mixed $nev
     */
    public function setNev($nev)
    {
        $this->nev = $nev;
    }

    /**
     * @return mixed
     */
    public function getTeljesMeret()
    {
        return $this->teljesMeret;
    }

    /**
     * @param mixed $teljesMeret
     */
    public function setTeljesMeret($teljesMeret)
    {
        $this->teljesMeret = $teljesMeret;
    }

    /**
     * @return mixed
     */
    public function getFelhasznaloAzonosito()
    {
        return $this->felhasznaloAzonosito;
    }

    /**
     * @param mixed $felhasznaloAzonosito
     */
    public function setFelhasznaloAzonosito($felhasznaloAzonosito)
    {
        $this->felhasznaloAzonosito = $felhasznaloAzonosito;
    }


}