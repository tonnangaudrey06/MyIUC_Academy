
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sexe = $_POST['sexe'];
    $address = $_POST['address'];

            $q = "UPDATE utilisateur SET nom='".$nom."',prenom='".$prenom."',sexe='".$sexe."',address='".$address."' WHERE id_utilisateur=".$id;
            $db->exec($q);
            //check user
            $rec = $db->query('SELECT * from utilisateur where id_utilisateur ='.$id)->fetchAll(PDO::FETCH_OBJ);
            $_SESSION["active"] = true;
            $_SESSION["email"] = $rec[0]->email;
            $_SESSION["userId"] = $rec[0]->id_utilisateur;
            $_SESSION["userName"] = $rec[0]->nom . ' ' . $rec[0]->prenom;
            $_SESSION["type"] = "User";
            //header("Location: ../app/competition/tournoi-d-exemple-de-protournoi.html");
            //header("Location: ../profil.php");
            //exit();
?>