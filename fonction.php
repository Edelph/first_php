

<?php
$host="127.0.0.1"; //Adresse du serveur Mysql
//$host="mysql.host.com";
$user="root"; //Login pour accéder a la base de

$passe=""; //Password pour accéder a la

$database="database";
$retoure ="";
$base = "tuto";

$connect = @mysqli_connect($host,$user,$passe);
$afficher = [];


if (isset($_POST["name"])) {

    if (!is_null($_POST["name"]))
    {
        $name = $_POST["name"];
        $number = $_POST["numberphone"];
        $mail = $_POST["emaile"];

        if(!$connect)
            {
                // Connexion impossible
                $retoure = "CONNEXION IMPOSSIBLE à la base de données !";
            }
        else
            {
                // Connexion établie au serveur MySQL
                $retoure = "Connexion établie";
                mysqli_select_db($connect,$base) or die ("Impossible
                d'ouvrir la base $database:".mysqli_error_list(mysqli_connect_error()));
                mysqli_query($connect,"INSERT INTO user VALUES(NULL,'$name','$number','$mail')");

                
            
                $retoure = "CONNEXION IMPOSSIBLE ";
            
                mysqli_select_db($connect,$base) or die ("Impossible
                        d'ouvrir la base $database:".mysqli_error_list(mysqli_connect_error()));
                        $req = mysqli_query($connect,"SELECT * FROM user ");
                        while ( $resultat = mysqli_fetch_array($req))
                        {
                            $afficher[] =
                            [
                                $resultat["id_user"],
                                $resultat["nom_user"],
                                $resultat["tel_user"],
                                $resultat["mail_user"]
                            ];
                        }
    
                mysqli_close($connect);
                unset($name);
                unset($number);
                unset($mail);
            
             }     

        }
    
    }
else{
    
    $retoure = "CONNEXION IMPOSSIBLE ";

    mysqli_select_db($connect,$base) or die ("Impossible
            d'ouvrir la base $database:".mysqli_error_list(mysqli_connect_error()));
            $req = mysqli_query($connect,"SELECT * FROM user ");
            while ( $resultat = mysqli_fetch_array($req))
            {
                $afficher[] =
                [
                    $resultat["id_user"],
                    $resultat["nom_user"],
                    $resultat["tel_user"],
                    $resultat["mail_user"]
                ];
            }

            mysqli_close($connect);
            unset($name);
            unset($number);
            unset($mail);

};





