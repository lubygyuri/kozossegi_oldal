<?php


class Ertesites {
    private $azonosito;
    private $uzenet;
    private $ertesites_ideje;
    private $felhasznalo_azonosito;

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
    public function getUzenet()
    {
        return $this->uzenet;
    }

    /**
     * @param mixed $uzenet
     */
    public function setUzenet($uzenet)
    {
        $this->uzenet = $uzenet;
    }

    /**
     * @return mixed
     */
    public function getErtesitesIdeje()
    {
        return $this->ertesites_ideje;
    }

    /**
     * @param mixed $ertesites_ideje
     */
    public function setErtesitesIdeje($ertesites_ideje)
    {
        $this->ertesites_ideje = $ertesites_ideje;
    }

    /**
     * @return mixed
     */
    public function getFelhasznaloAzonosito()
    {
        return $this->felhasznalo_azonosito;
    }

    /**
     * @param mixed $felhasznalo_azonosito
     */
    public function setFelhasznaloAzonosito($felhasznalo_azonosito)
    {
        $this->felhasznalo_azonosito = $felhasznalo_azonosito;
    }


}