
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
    $currentpassword = $_POST['currentpassword'];
    $plainPasswordfirst = $_POST['plainPasswordfirst'];
    $plainPasswordsecond = $_POST['plainPasswordsecond'];

    $rec1 = $db->query('SELECT * from utilisateur where id_utilisateur ='.$_SESSION["userId"])->fetchAll(PDO::FETCH_OBJ);
    if($currentpassword == $rec1[0]->password){
        if($plainPasswordfirst == $plainPasswordsecond){
            $q = "UPDATE utilisateur SET password='".$plainPasswordfirst."' WHERE id_utilisateur=".$id;
            $db->exec($q);
            $rec = $db->query('SELECT * from utilisateur where id_utilisateur ='.$_SESSION["userId"])->fetchAll(PDO::FETCH_OBJ);
            $_SESSION["active"] = true;
            $_SESSION["email"] = $rec[0]->email;
            $_SESSION["userId"] = $rec[0]->id_utilisateur;
            $_SESSION["userName"] = $rec[0]->nom . ' ' . $rec[0]->prenom;
            $_SESSION["type"] = "User";
        }
        else{
            echo('Les mots de passe ne correspondent pas');
        }
    }
    else
    {
        echo("Ce mot de passe ne correpond pas a l'ancien mot de passe");
    }
?>