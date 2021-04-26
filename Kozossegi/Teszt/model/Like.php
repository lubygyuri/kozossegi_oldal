<?php


class Like {
    private $bejegyzesAzonosito;
    private $felhasznaloAzonosito;

    /**
     * @return mixed
     */
    public function getBejegyzesAzonosito()
    {
        return $this->bejegyzesAzonosito;
    }

    /**
     * @param mixed $bejegyzesAzonosito
     */
    public function setBejegyzesAzonosito($bejegyzesAzonosito)
    {
        $this->bejegyzesAzonosito = $bejegyzesAzonosito;
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