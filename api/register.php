
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
if ($_POST['acceptCGU'] = "on") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $plainPasswordfirst = $_POST['plainPasswordfirst'];
    $plainPasswordsecond = $_POST['plainPasswordsecond'];

    //check for email
    $rec1 = $db->query('SELECT * from  utilisateur  where email = "' . $email . '"')->fetchAll(PDO::FETCH_OBJ);
    if (sizeof($rec1) == 0) {
        if ($plainPasswordfirst == $plainPasswordsecond) {
            $q = "INSERT INTO utilisateur(nom, prenom, email, password) 
            VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $plainPasswordfirst . "')";
            $db->exec($q);
            //check user
            $rec = $db->query('SELECT * from utilisateur where email = "' . $email . '" and password = "' . $plainPasswordfirst . '"')->fetchAll(PDO::FETCH_OBJ);
            $_SESSION["active"] = true;
            $_SESSION["email"] = $rec[0]->email;
            $_SESSION["userId"] = $rec[0]->id_utilisateur;
            $_SESSION["userName"] = $rec[0]->nom . ' ' . $rec[0]->prenom;
            $_SESSION["type"] = "User";
            //header("Location: ../app/competition/tournoi-d-exemple-de-protournoi.html");
            header("Location: ../profil.php");
            //exit();
        } else {
            echo ("Les Mots de Passes ne correspondent pas");
        }
    } else {
        echo ("Cette adresse est deja prise");
    }
} else {
    echo ("Veuillez accepter les termes et les conditions");
}


?>