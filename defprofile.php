
<div class="content-header">
    <div class="header-section">
        <h1 itemscope itemtype="http://schema.org/Person">
            <img src="./img/default.png" alt="Avatar de <?php echo($_SESSION["userName"]); ?>" class="profile-avatar pull-right img-circle" itemprop="image">
            <span itemprop="name"><?php echo($_SESSION["userName"]); ?></span><br><small>Profil</small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-lg-6">

        <a href="./profil.php?p=creer-competition" class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background">
                    <i class="fa fa-magic"></i>
                </div>
                <h3 class="widget-content text-right">
                    Créer une compétition<br>
                    <small>En 3 étapes</small>
                </h3>
            </div>
        </a>

    </div>
    <div class="col-sm-6 col-lg-3">

        <a href="./aide" target="_blank" class="widget widget-hover-effect1">
            <div class="widget-simple">
                <div class="widget-icon pull-left themed-background-autumn">
                    <i class="fa fa-question"></i>
                </div>
                <h3 class="widget-content text-right">
                    Pages d&#039;aide<br>
                    <small>Au cas où</small>
                </h3>
            </div>
        </a>

    </div>
</div>
<div class="row">
    <div class="col-md-6">

        <div class="widget">
            <div class="widget-extra themed-background-dark">
                <h3 class="widget-content-light">
                    Compétitions
                </h3>
            </div>
            <div class="widget-extra">
                <dl style="margin-top:20px;margin-bottom:20px">
                </dl>
            </div>
        </div>

    </div>
    <div class="col-md-6">

        <div class="widget">
            <div class="widget-extra themed-background-dark">
                <h3 class="widget-content-light">
                    Participations
                </h3>
            </div>
            <div class="widget-extra">
                <dl style="margin-top:20px;margin-bottom:20px">
                </dl>
            </div>
        </div>

    </div>
</div>