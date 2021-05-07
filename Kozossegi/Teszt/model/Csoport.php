<?php


class Csoport {

    private $azonosito;
    private $nev;
    private $admin_felhasznalo;

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
    public function getAdminFelhasznalo()
    {
        return $this->admin_felhasznalo;
    }

    /**
     * @param mixed $admin_felhasznalo
     */
    public function setAdminFelhasznalo($admin_felhasznalo)
    {
        $this->admin_felhasznalo = $admin_felhasznalo;
    }



}