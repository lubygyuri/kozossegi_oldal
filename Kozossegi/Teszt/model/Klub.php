<?php

class Klub {

    private $nev;
    private $leiras;
    private $lathatosag;
    private $letrehozasDatuma;
    private $adminFelhasznalo;

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
    public function getLeiras()
    {
        return $this->leiras;
    }

    /**
     * @param mixed $leiras
     */
    public function setLeiras($leiras)
    {
        $this->leiras = $leiras;
    }

    /**
     * @return mixed
     */
    public function getLathatosag()
    {
        return $this->lathatosag;
    }

    /**
     * @param mixed $lathatosag
     */
    public function setLathatosag($lathatosag)
    {
        $this->lathatosag = $lathatosag;
    }

    /**
     * @return mixed
     */
    public function getLetrehozasDatuma()
    {
        return $this->letrehozasDatuma;
    }

    /**
     * @param mixed $letrehozasDatuma
     */
    public function setLetrehozasDatuma($letrehozasDatuma)
    {
        $this->letrehozasDatuma = $letrehozasDatuma;
    }

    /**
     * @return mixed
     */
    public function getAdminFelhasznalo()
    {
        return $this->adminFelhasznalo;
    }

    /**
     * @param mixed $adminFelhasznalo
     */
    public function setAdminFelhasznalo($adminFelhasznalo)
    {
        $this->adminFelhasznalo = $adminFelhasznalo;
    }

}