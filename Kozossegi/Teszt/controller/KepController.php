<?php

class KepController {

    public function kepFeltoltes($formName) {

        if (empty($_FILES[$formName]['tmp_name'])) {
            return '';
        }

        $image = base64_encode(file_get_contents($_FILES[$formName]['tmp_name']));

        $options = array('http'=>array(
            'method'=>"POST",
            'header'=>"Authorization: Bearer b94ae91d008b3dea84bafd56d9be06a1c8790c60\n".
                "Content-Type: application/x-www-form-urlencoded",
            'content'=>$image
        ));

        $context = stream_context_create($options);

        $imgurURL = "https://api.imgur.com/3/image";

        if ($_FILES[$formName]['size'] > 10240000) {
            die("A kép túl nagy, maximum 10MB lehet.");
        }

        $response = file_get_contents($imgurURL, false, $context);

        $response = json_decode($response);

//        Visszaadja a kep elérési útvonalát

//        TODO: A kép méretének visszaadása

        return $response->data->link;
    }

}