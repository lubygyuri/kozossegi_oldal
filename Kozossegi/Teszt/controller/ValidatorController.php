<?php


class ValidatorController {
    private $errors = array();

    public function validateLogin($email, $jelszo) {

    }

    public function validateRegister($email, $jelszo, $jelszoIsmet) {
        $validator = new Validator();

        array_push($this->errors, $validator->ervenyesEmail($email));
        array_push($this->errors, $validator->foglaltEmail($email));
        array_push($this->errors, $validator->minimalisHossz($jelszo, 6, "Jelszo"));
        array_push($this->errors, $validator->egyezoJelszavak($jelszo, $jelszoIsmet));

        return $this->errors;
    }
}