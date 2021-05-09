<?php


class ValidatorController {
    private $errors;
    private $validator;

    public function __construct(){
        $this->validator = new Validator();
        $this->errors = array();
    }


    public function validateLogin($email, $jelszo) {
        array_push($this->errors, $this->validator->helyesEmailVagyJelszo($email, $jelszo));

        return $this->printOutErrors();
    }

    public function validateRegister($email, $jelszo, $jelszoIsmet) {
        array_push($this->errors, $this->validator->ervenyesEmail($email));
        array_push($this->errors, $this->validator->foglaltEmail($email));
        array_push($this->errors, $this->validator->minimalisHossz($jelszo, 6, "Jelszo"));
        array_push($this->errors, $this->validator->egyezoJelszavak($jelszo, $jelszoIsmet));

        return $this->printOutErrors();
    }

    private function printOutErrors() {
        $returnArray = array();
        foreach ($this->errors as $error) {
            if ($error != '') {
                array_push($returnArray, $error);
            }
        }
        return $returnArray;
    }

}