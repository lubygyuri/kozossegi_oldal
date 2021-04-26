<?php


class Uzenet {
    private $azonosito;
    private $uzenet;
    private $kuldesIdeje;
    private $kuldoAzonosito;
    private $fogadoAzonosito;
    private $kep;

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
    public function getKuldesIdeje()
    {
        return $this->kuldesIdeje;
    }

    /**
     * @param mixed $kuldesIdeje
     */
    public function setKuldesIdeje($kuldesIdeje)
    {
        $this->kuldesIdeje = $kuldesIdeje;
    }

    /**
     * @return mixed
     */
    public function getKuldoAzonosito()
    {
        return $this->kuldoAzonosito;
    }

    /**
     * @param mixed $kuldoAzonosito
     */
    public function setKuldoAzonosito($kuldoAzonosito)
    {
        $this->kuldoAzonosito = $kuldoAzonosito;
    }

    /**
     * @return mixed
     */
    public function getFogadoAzonosito()
    {
        return $this->fogadoAzonosito;
    }

    /**
     * @param mixed $fogadoAzonosito
     */
    public function setFogadoAzonosito($fogadoAzonosito)
    {
        $this->fogadoAzonosito = $fogadoAzonosito;
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


}