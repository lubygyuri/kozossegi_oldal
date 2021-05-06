<?php


class Fenykep {
    private $azonosito;
    private $kep;
    private $meret;
    private $fenykepAlbumAzonosito;

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
    public function getKep()
    {
        return $this->kep;
    }

    /**
     * @param mixed $kep
     */
    public function setKep($kep)
    {
        $this->kep = $kep;
    }

    /**
     * @return mixed
     */
    public function getMeret()
    {
        return $this->meret;
    }

    /**
     * @param mixed $meret
     */
    public function setMeret($meret)
    {
        $this->meret = $meret;
    }

    /**
     * @return mixed
     */
    public function getFenykepAlbumAzonosito()
    {
        return $this->fenykepAlbumAzonosito;
    }

    /**
     * @param mixed $fenykepAlbumAzonosito
     */
    public function setFenykepAlbumAzonosito($fenykepAlbumAzonosito)
    {
        $this->fenykepAlbumAzonosito = $fenykepAlbumAzonosito;
    }


}