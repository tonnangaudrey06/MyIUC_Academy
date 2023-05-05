
<?php
session_start();
include_once './database.php';
$database = new Database();
$db = $database->getConnection();
$id = $_POST['id'];
$victory = $_POST['victory'];
$draw = $_POST['draw'];
$defeat = $_POST['defeat'];
$withdrawal = $_POST['withdrawal'];

$q = "UPDATE competitions SET 
            point_victoire=" . $victory . ",
            point_defaite=" . $defeat . ",
            point_forfait=" . $withdrawal . ",
            point_nul=" . $draw . " WHERE id =" . $id;
$db->exec($q);
header("Location: ../profil.php?p=creer-competition3&c=" . $id);
//exit();



?>