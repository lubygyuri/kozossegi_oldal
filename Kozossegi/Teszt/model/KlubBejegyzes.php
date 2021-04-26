<?php


class KlubBejegyzes{
    private $azonosito;
    private $uzenet;
    private $letrehozasIdeje;
    private $felhasznaloAzonosito;
    private $kep;
    private $kommentek =array();
    private $likes;
    private $isLiked;

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
     * @return array
     */
    public function getKommentek()
    {
        return $this->kommentek;
    }

    /**
     * @param array $kommentek
     */
    public function setKommentek($kommentek)
    {
        $this->kommentek = $kommentek;
    }

    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param mixed $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @return mixed
     */
    public function getIsLiked()
    {
        return $this->isLiked;
    }

    /**
     * @param mixed $isLiked
     */
    public function setIsLiked($isLiked)
    {
        $this->isLiked = $isLiked;
    }


}