
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
$email = $_POST['_username'];
$password = $_POST['_password'];

//clearing previous session
$_SESSION[] =null;
//check for login credentials
$rec = $db->query('SELECT * from utilisateur where email = "' . $email . '" and password = "' . $password . '"')->fetchAll(PDO::FETCH_OBJ);
if (sizeof($rec) > 0) {
    $_SESSION["active"] = true;
    $_SESSION["email"] = $rec[0]->email;
    $_SESSION["userId"] = $rec[0]->id_utilisateur;
    $_SESSION["userName"] = $rec[0]->nom . ' ' . $rec[0]->prenom;
    $_SESSION["type"] = "User";
    //header("Location: ../app/competition/tournoi-d-exemple-de-protournoi.html");
    header("Location: ../profil.php");
    exit();
} else { 
    echo ("Les donnees entrees sont incorrectes");
}
?>