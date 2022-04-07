<?php
    session_start();
    // var_dump($_COOKIE);
    function _saveDWNLD(){
        try {
            // db: lservice__lmilleservices
            // user: lservice_lservice
            // pwd: O#.2dqZKsHJv
            // $bdd = new PDO('mysql:host=127.0.0.1;dbname=lservice__lmilleservices','lservice_lservice','O#.2dqZKsHJv');
            $bdd = new PDO('mysql:host=localhost;dbname=__db_lesmilleservices','root','');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $bdd = new PDO('mysql:host=localhost;dbname=lesmi935861_113zbvl','root','');
            if($bdd != null){
                $me = $bdd->prepare("INSERT INTO _downloads (hsh) VALUES (?)");
                $me->execute([isset($_COOKIE['PHPSESSID']) ? $_COOKIE['PHPSESSID'] : "_zaqxswcde"]);
            }
        } catch (PDOException $th) {
            // something went wrong with my script whene trying to connect to the database
        }
    }
?>