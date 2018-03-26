<?php
    $array = array("nom"=> "", "prenom" => "", "mail" => "", "telephone"=> "", "message" => "", "nomError"=> "", "prenomError" => "", "mailError" => "", "telephoneError"=> "",
    "messageError" => "", "reussi" => false);
    $mailPour = "brownaformac@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array["nom"] = verification($_POST["nom"]);
        $array["prenom"] = verification($_POST["prenom"]);
        $array["mail"] = verification($_POST["mail"]);
        $array["telephone"] = verification($_POST["telephone"]);
        $array["message"] = verification($_POST["message"]);
        $array["reussi"] = true;
        $mailTexte = "";

        if (empty($array["nom"])) {
            $array["nomError"] = "Je voudrai connaitre votre Nom";
            $array["reussi"] = false;
        } else {
            $mailTexte = "Nom : {$array["nom"]}\n";
        }
        if (empty($array["prenom"])) {
            $array["prenomError"] = "Je voudrai connaitre votre Prénom";
            $array["reussi"] = false;
        } else {
            $mailTexte = "Prénom : {$array["prenom"]}\n";
        }
        if (!validMail($array["mail"])) {
            $array["mailError"] = "Entrez un e-mail valide svp";
            $array["reussi"] = false;
        } else {
            $mailTexte = "E-mail : {$array["mail"]}\n";
        }
        if (!validTel($array["telephone"])) {
            $array["telephoneError"] = "Ceci n'est pas un numéro valide";
            $array["reussi"] = false;
        } else {
            $mailTexte = "Telephone : {$array["telephone"]}\n";
        }
        if (empty($array["message"])) {
            $array["messageError"] = "De quoi voulez vous me parler ?";
            $array["reussi"] = false;
        } else {
            $mailTexte = "Message : {$array["message"]}\n";
        }
        if($array["reussi"]){
            $headers = "From {$array["nom"]} {$array["prenom"]} <{$array["mail"]}>\r\nReply-To : {$array["mail"]}";
            mail($mailPour, "Un message", $mailTexte, $headers);
        }
        echo json_encode($array);
    }

    function validMail($var){
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function validTel($var){
        return preg_match("/^[0-9 ]*$/" , $var);
    }

    function verification($var){
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }


?>
