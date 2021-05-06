<?php

class KepController extends DB {

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

        return $response->data->link;
    }

    public function kepFeltoltesMerettel($formName) {
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

        $respArray = array();
        array_push($respArray, $response->data->link);
        array_push($respArray, $_FILES[$formName]['size']); // byte-ban

//        Visszaadja a kep elérési útvonalát és méretét
        return $respArray;
    }

    public function fenykepCreateInDatabase(Fenykep $fenykep) {
        $sql = "INSERT INTO FENYKEPEK (kep, meret, fenykep_album_azonosito) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fenykep->getKep(), $fenykep->getMeret(), $fenykep->getFenykepAlbumAzonosito()]);
    }

    public function getAllFenykepByFenykepAlbum($fenykepAlbum) {
        $sql = "SELECT kep FROM FENYKEPEK WHERE FENYKEP_ALBUM_AZONOSITO = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fenykepAlbum]);
        return $stmt->fetchAll();
    }

}