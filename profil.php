<!DOCTYPE html>
<?php session_start()  ?>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="fr"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php $_SESSION["userName"] ?>
        |
        ProTournoi
    </title>
    <meta name="description" content="<?php $_SESSION["userName"] ?> participe à des tournois sportifs sur ProTournoi.">
    <meta name="author" content="ProTournoi">
    <meta name="keywords" content="<?php $_SESSION["userName"] ?>,protournoi,compétition,tournoi,logiciel,matchs,protournoi,tableaux,poules">
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
    <link rel="stylesheet" href="./css/compiled/all.css" />
</head>

<body>

    <noscript><iframe src="/www.googletagmanager.com/ns.html?id=GTM-N7NBDN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '/www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N7NBDN');
    </script>

    <div id="page-wrapper">
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations header-fixed-top">

            <div id="sidebar">

                <div id="sidebar-scroll">

                    <div class="sidebar-content">

                        <a id="protournoi-logo-link" href="./" target="_blank" class="sidebar-brand">
                            <span class="sidebar-nav-mini-hide">
                                <img src="./img/protournoi-logo.png" style="height:40px ; display: block; margin-left: auto; margin-right: auto; padding-top: 8px" alt="ProTournoi logo">
                            </span>
                        </a>


                        <div class="col-xs-12" style="margin-top:10px;margin-bottom:10px">
                            <a class="btn btn-primary" href="./profil.php?p=creer-competition"><span class="sidebar-nav-mini-hide">Créer une compétition</span></a>
                        </div>
                        <ul class="sidebar-nav">
                            <li class="sidebar-header">
                                <span class="sidebar-header-title">Aide</span>
                            </li>
                            <li>
                                <a class="" href="./aide" target="_blank"><span class="sidebar-nav-mini-hide">Pages d&#039;aide</span></a>
                            </li>
                            <li>
                                <a class="" href="./contact" target="_blank"><span class="sidebar-nav-mini-hide">Contactez-nous</span></a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

            <div id="main-container">
                <header class="navbar navbar-default navbar-fixed-top" style="border-bottom-width: 0px;">
                    <ul class="nav navbar-nav-custom">
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');
					this.blur();">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form-custom" role="search" id="search-form">
                        <div class="form-group">
                            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Rechercher des compétitions, des lieux, des équipes, des joueurs... Appuyez sur Entrée pour valider." value="" required>
                        </div>
                    </form>
                    <ul class="nav navbar-nav-custom pull-right">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="./img/default.png" alt="avatar"> <?php $_SESSION["userName"] ?> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li>
                                    <a href="./profil.php?id=<?php $_SESSION["userId"]  ?>">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Profil
                                    </a>
                                    <a href="javascript:void(0)" id="edit-profile-button"><i class="fa fa-cog fa-fw pull-right"></i>
                                        Éditer mon profil
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="./logout"><i class="fa fa-sign-out fa-fw pull-right"></i>
                                        Déconnexion
                                    </a>
                                </li>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </header>
                <div id="page-content">
                <?php
                        @$page="./".$_GET["p"];
                        if($page!="./")
                        $page =$page.".php";
                        else
                        $page="./defprofile.php";
                        include_once($page);
                        ?>
                </div>
                <footer class="clearfix">
                    <div class="pull-right">
                    </div>
                    <div class="pull-left">
                        2023 &copy; <a href="https://www.protournoi.fr" style="color: #ea503d;" target="_blank">ProTournoi</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <div id="edit-profile-container"></div>
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="./js/compiled/all.js"></script>
    <script>
        $('#edit-profile-button').click(function() {
            var editProfilePath = './editprofile.php';
            $.get(editProfilePath, function(data) {
                $("#edit-profile-container").html(data);
                $('#modal-user-settings').modal('show');
                $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            });
        });
    </script>
    <script>
        function submitEditProfile(e, dom) {
            var postData = new FormData(dom[0]);
            var formURL = dom.attr("action");
            $.ajax({
                url: formURL,
                type: "POST",
                data: postData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                    $('#modal-user-settings').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();

                    if (data.url) {
                        window.location.assign(data.url);
                    } else {
                        $('#modal-user-settings').replaceWith(data);
                        $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e) {
                            e.preventDefault();
                            $(this).tab('show');
                        });
                        $('.nav-tabs a[href=#' + dom.attr('form_name') + ']').tab('show');
                        $('#modal-user-settings').modal('show');
                    }
                },
            });
            e.preventDefault(); //STOP default action
            return false;
        }
        $("body").on("submit", ".edit_profile_form", function(e) {
            submitEditProfile(e, $(this));
        });
    </script>
    <script>
        $("#search-form").submit(function(event) {
            event.preventDefault();
            request = $("#top-search").val();
            baseURL = "./app/recherche/TOREPLACE";
            window.location.href = baseURL.replace("TOREPLACE", request);
        });
    </script>
    
</body>

</html>