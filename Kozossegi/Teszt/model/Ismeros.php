<?php


class Ismeros {
    private $azonosito;
    private $statusz;
    private $felhasznalo1;
    private $felhasznalo2;

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
    public function getStatusz()
    {
        return $this->statusz;
    }

    /**
     * @param mixed $statusz
     */
    public function setStatusz($statusz)
    {
        $this->statusz = $statusz;
    }

    /**
     * @return mixed
     */
    public function getFelhasznalo1()
    {
        return $this->felhasznalo1;
    }

    /**
     * @param mixed $felhasznalo1
     */
    public function setFelhasznalo1($felhasznalo1)
    {
        $this->felhasznalo1 = $felhasznalo1;
    }

    /**
     * @return mixed
     */
    public function getFelhasznalo2()
    {
        return $this->felhasznalo2;
    }

    /**
     * @param mixed $felhasznalo2
     */
    public function setFelhasznalo2($felhasznalo2)
    {
        $this->felhasznalo2 = $felhasznalo2;
    }


}