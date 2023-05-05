
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
$name = $_POST['name'];
$sport = $_POST['sport'];
$location = $_POST['location'];
$description = $_POST['description'];
$rules = $_POST['rules'];
$beginDate = $_POST['beginDate'];
$endDate = $_POST['endDate'];
$firstStepFormat = $_POST['firstStepFormat'];
            $q = "INSERT INTO competitions(debut_competition, fin_competition, type_competition, sport,nom_competition,lieu, description) 
            VALUES ('".$beginDate."','".$endDate."','".$firstStepFormat."','".$sport."','".$name."','".$location."','".$description."')";
            echo($q);
            $db->exec($q);
            $rec1 = $db->query('SELECT * from  competitions  where debut_competition = "' . $beginDate . '" and nom_competition="'.$name.'"' )->fetchAll(PDO::FETCH_OBJ);
            header("Location: ../profil.php?p=creer-competition2&c=".$rec1[0]->id);
            //exit();



?>