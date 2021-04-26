<?php


class Komment
{
    private $azonosito;
    private $uzenet;
    private $letrehozasIdeje;
    private $felhasznaloAzonosito;
    private $bejegyzes_azonosito;

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
    public function getLetrehozasIdeje()
    {
        return $this->letrehozasIdeje;
    }

    /**
     * @param mixed $letrehozasIdeje
     */
    public function setLetrehozasIdeje($letrehozasIdeje)
    {
        $this->letrehozasIdeje = $letrehozasIdeje;
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

    /**
     * @return mixed
     */
    public function getBejegyzesAzonosito()
    {
        return $this->bejegyzes_azonosito;
    }

    /**
     * @param mixed $bejegyzes_azonosito
     */
    public function setBejegyzesAzonosito($bejegyzes_azonosito)
    {
        $this->bejegyzes_azonosito = $bejegyzes_azonosito;
    }



}