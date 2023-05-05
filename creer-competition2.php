<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-magic"></i>Créer une compétition<br><small>En seulement 3 étapes !</small>
        </h1>
    </div>
</div>
<div class="block">
    <form class="form-horizontal form-bordered ui-formwizard" name="protournoi_competitionbundle_competition" method="POST" action="./api/point_competition.php">
        <div class="step ui-formwizard-content">
            <div class="wizard-steps">
                <div class="row">
                    <div class="col-xs-3 ">
                        <span>1. Général</span>
                    </div>
                    <div class="col-xs-3 active">
                        <span>2. Sport</span>
                    </div>
                    <div class="col-xs-3 ">
                        <span>3. Catégories</span>
                    </div>
                    <div class="col-xs-3 ">
                        <span>4. Dons</span>
                    </div>
                </div>
            </div>
            <fieldset>
                <legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <i class="fa fa-cog"></i> Paramètres spécifiques à mon sport
                        </div>
                    </div>
                </legend>
                <div id="protournoi_competitionbundle_competition_sportParametersValues">
                    <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_sportParametersValues_nbPointsVictory">Nombre de points par victoire *</label>
                        <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_sportParametersValues_nbPointsVictory" name="victory" required="required" class="form-control" value="3" /></div>
                    </div>
                    <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_sportParametersValues_nbPointsDraw">Nombre de points par match nul *</label>
                        <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_sportParametersValues_nbPointsDraw" name="draw" required="required" class="form-control" value="1" /></div>
                    </div>
                    <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_sportParametersValues_nbPointsDefeat">Nombre de points par défaite *</label>
                        <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_sportParametersValues_nbPointsDefeat" name="defeat" required="required" class="form-control" value="0" /></div>
                    </div>
                    <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_sportParametersValues_nbPointsWithdrawal">Nombre de points par défaite par forfait *</label>
                        <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_sportParametersValues_nbPointsWithdrawal" name="withdrawal" required="required" class="form-control" value="0" /></div>
                    </div>
                </div>
            </fieldset>
        </div>
        <?php
        echo ('<input type="hidden" id="protournoi_competitionbundle_competition_flow_createCompetition_step" name="id" class="form-control" value="'.$_GET["c"].'" />')
        ?>
        <input type="hidden" id="protournoi_competitionbundle_competition__token" name="_token" class="form-control" value="xEYf2y6-mcaeqn0-GUjNLbz1LcT0GDp9pR91WAtmLI8" />
        <div class="form-group form-actions">
            <div class="text-center">
                <div class="craue_formflow_buttons craue_formflow_button_count_3">
                    <button type="submit" class="btn btn-lg  btn-default" name="flow_createCompetition_transition" value="back" formnovalidate="formnovalidate">
                        <i class="fa fa-arrow-left"></i> &nbsp;Étape précédente</button>
                    <button type="submit" class="btn btn-lg btn-primary">Étape suivante&nbsp;<i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>