<?php

// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if(empty($_POST['recaptcha-response'])){
        header('Location: signin.php');
    }else{
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LeT89EaAAAAAGHA51j9cdFEz71lIoK1xvMvlR3I&response={$_POST['recaptcha-response']}";

        // On vérifie si curl est installé
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // On utilisera file_get_contents
            $response = file_get_contents($url);
        }

        // On vérifie qu'on a une réponse
        if(empty($response) || is_null($response)){
            header('Location: signin.php');
        }else{
            $data = json_decode($response);
            if($data->success){
                if(
                    isset($_POST['email']) && !empty($_POST['email']) &&
                    isset($_POST['mdp']) && !empty($_POST['mdp'])
                ){
                    // On nettoie le contenu
                    $email = strip_tags($_POST['email']);
                    $mdp = strip_tags($_POST['mdp']);

                    // Ici vous traitez vos données

                    echo "Compte de {$email} ouvert";
                }
            }else{
                header('Location: signin.php');
            }
        }
    }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}