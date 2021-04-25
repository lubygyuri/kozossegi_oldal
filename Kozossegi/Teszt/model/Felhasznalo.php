<?php


class Felhasznalo {
    private $email;
    private $jelszo;
    private $vezeteknev;
    private $keresztnev;
    private $szuletesiDatum;
    private $neme;
    private $iskola;
    private $munkahely;
    private $csatlakozasDatuma;
    private $profilkep;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getJelszo()
    {
        return $this->jelszo;
    }

    /**
     * @param mixed $jelszo
     */
    public function setJelszo($jelszo)
    {
        $this->jelszo = $jelszo;
    }

    /**
     * @return mixed
     */
    public function getVezeteknev()
    {
        return $this->vezeteknev;
    }

    /**
     * @param mixed $vezeteknev
     */
    public function setVezeteknev($vezeteknev)
    {
        $this->vezeteknev = $vezeteknev;
    }

    /**
     * @return mixed
     */
    public function getKeresztnev()
    {
        return $this->keresztnev;
    }

    /**
     * @param mixed $keresztnev
     */
    public function setKeresztnev($keresztnev)
    {
        $this->keresztnev = $keresztnev;
    }

    /**
     * @return mixed
     */
    public function getSzuletesiDatum()
    {
        return $this->szuletesiDatum;
    }

    /**
     * @param mixed $szuletesiDatum
     */
    public function setSzuletesiDatum($szuletesiDatum)
    {
        $this->szuletesiDatum = $szuletesiDatum;
    }

    /**
     * @return mixed
     */
    public function getNeme()
    {
        return $this->neme;
    }

    /**
     * @param mixed $neme
     */
    public function setNeme($neme)
    {
        $this->neme = $neme;
    }

    /**
     * @return mixed
     */
    public function getIskola()
    {
        return $this->iskola;
    }

    /**
     * @param mixed $iskola
     */
    public function setIskola($iskola)
    {
        $this->iskola = $iskola;
    }

    /**
     * @return mixed
     */
    public function getMunkahely()
    {
        return $this->munkahely;
    }

    /**
     * @param mixed $munkahely
     */
    public function setMunkahely($munkahely)
    {
        $this->munkahely = $munkahely;
    }

    /**
     * @return mixed
     */
    public function getCsatlakozasDatuma()
    {
        return $this->csatlakozasDatuma;
    }

    /**
     * @param mixed $csatlakozasDatuma
     */
    public function setCsatlakozasDatuma($csatlakozasDatuma)
    {
        $this->csatlakozasDatuma = $csatlakozasDatuma;
    }

    /**
     * @return mixed
     */
    public function getProfilkep()
    {
        return $this->profilkep;
    }

    /**
     * @param mixed $profilkep
     */
    public function setProfilkep($profilkep)
    {
        $this->profilkep = $profilkep;
    }
}