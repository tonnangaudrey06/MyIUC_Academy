<html>
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <title> ProTournoi - Messagerie
    </title>
    <meta name="description" content="">
    <meta name="author" content="ProTournoi">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta property="fb:page_id" content="645959818772006">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png">
    <link rel="apple-touch-icon" href="./img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="./img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="./img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="./img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="./img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="./img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="./img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="./img/icon180.png" sizes="180x180">
    <meta name="theme-color" content="#ea503d">
    <link rel="stylesheet" href="./css/compiled/all.css">
    <style type="text/css">
        .jqstooltip {
            width: auto !important;
            height: auto !important;
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: #000000;
            color: white;
            font-size: 11px;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="modal-open">
    <div id="page-content" style="min-height: 558px;">
        <div id="edit-profile-container">
            <div id="modal-user-settings" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="false" style="display: block; padding-left: 17px;">
                <div class="modal-backdrop fade in" style="height: 1134px;"></div>
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header text-center">
                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Éditer mon profil</h2>
                        </div>

                        <div class="modal-body">
                            <ul class="nav nav-tabs push" data-toggle="tabs">
                                <li class="active"><a href="#fos_user_profile_edit">Informations personnelles</a></li>
                                <li><a href="#fos_user_change_password">Changer mon mot de passe</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="fos_user_profile_edit">
                                    <form action="./api/edituser.php" enctype="multipart/form-data" method="POST" class="form-horizontal form-bordered fos_user_profile_edit edit_profile_form" form_name="fos_user_profile_edit">
                                        <fieldset>
                                        <?php 
                                        include_once './api/database.php';
                                        $database = new Database();
                                        $db = $database->getConnection();
                                        $qu = 'SELECT * from utilisateur where id_utilisateur ='.$_SESSION["userId"];
                                        $rec = $db->query($qu)->fetchAll(PDO::FETCH_OBJ);
                                        echo('
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_profile_form_email">Adresse e-mail *</label>
                                                <div class="col-md-8"><input type="email" id="fos_user_profile_form_email" name="email" class="form-control" value="'.$rec[0]->email.'" readonly></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_profile_form_firstName">Prénom *</label>
                                                <div class="col-md-8"><input type="text" id="fos_user_profile_form_firstName" name="prenom" required="required" maxlength="255" class="form-control" value="'.$rec[0]->prenom.'"></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_profile_form_lastName">Nom *</label>
                                                <div class="col-md-8"><input type="text" id="fos_user_profile_form_lastName" name="nom" required="required" maxlength="255" class="form-control" value="'.$rec[0]->nom.'"></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label" for="fos_user_profile_form_gender">Genre</label>
                                                <div class="col-md-8"><select id="fos_user_profile_form_gender" name="sexe" class="form-control">
                                                        <option value="Homme">Homme</option>
                                                        <option value="Femme">Femme</option>
                                                    </select></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_profile_form_address">Adresse *</label>
                                                <div class="col-md-8"><input type="text" id="fos_user_profile_form_address" name="address" required="required" maxlength="255" class="form-control" value="'.$rec[0]->address.'"></div>
                                            </div>
                                            <input type="hidden" id="fos_user_profile_form__token" name="id" class="form-control" value="'.$rec[0]->id_utilisateur.'">
                                        </fieldset>
                                        ');
                                        echo('
                                        <div class="form-group form-actions">
                                            <div class="col-xs-12 text-right">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Sauvegarder</button>
                                            </div>
                                        </div>
                                        ');
                                        ?>
                                    </form>
                                </div>
                                <div class="tab-pane" id="fos_user_change_password">
                                    <form action="./api/setpassword.php" method="POST" class="form-horizontal form-bordered fos_user_change_password edit_profile_form" form_name="fos_user_change_password">
                                        <fieldset>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_change_password_form_current_password">Mot de passe actuel *</label>
                                                <div class="col-md-8"><input type="password" id="fos_user_change_password_form_current_password" name="currentpassword" required="required" class="form-control"></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_change_password_form_plainPassword_first">Nouveau mot de passe *</label>
                                                <div class="col-md-8"><input type="password" id="fos_user_change_password_form_plainPassword_first" name="plainPasswordfirst" required="required" class="form-control"></div>
                                            </div>
                                            <div class="form-group "><label class="col-md-4 control-label required" for="fos_user_change_password_form_plainPassword_second">Confirmer le mot de passe *</label>
                                                <div class="col-md-8"><input type="password" id="fos_user_change_password_form_plainPassword_second" name="plainPasswordsecond" required="required" class="form-control"></div>
                                            </div>
                                            <input type="hidden" id="fos_user_change_password_form__token" name="fos_user_change_password_form[_token]" class="form-control" value="bZFipVTOZfzuy893m6qd_7Zvdbfdv9SecabVbTu3U-U">
                                        </fieldset>
                                        <div class="form-group form-actions">
                                            <div class="col-xs-12 text-right">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Sauvegarder</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
</body>

</html>