<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-magic"></i>Créer une compétition<br><small>En seulement 3 étapes
                !</small>
        </h1>
    </div>
</div>
<div class="block">
    <form class="form-horizontal form-bordered ui-formwizard" name="protournoi_competitionbundle_competition" method="get">
        <div class="step ui-formwizard-content">
            <div class="wizard-steps">
                <div class="row">
                    <div class="col-xs-3 active">
                        <span>1. Général</span>
                    </div>
                    <div class="col-xs-3 ">
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
                            <i class="fa fa-newspaper-o"></i> Informations générales
                        </div>
                    </div>
                </legend>
                <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_name">Nom de ma compétition
                        *</label>
                    <div class="col-md-5"><input type="text" id="protournoi_competitionbundle_competition_name" name="protournoi_competitionbundle_competition[name]" required="required" maxlength="255" class="form-control" /></div>
                </div>
                <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_sport">Sport *</label>
                    <div class="col-md-5"><select id="protournoi_competitionbundle_competition_sport" name="protournoi_competitionbundle_competition[sport]" class="select-select2" style="width:100%" class="form-control">
                            <option value="">Sélectionnez un sport</option>
                            <option value="11">Badminton</option>
                            <option value="21">Basket-ball</option>
                            <option value="1">Football</option>
                            <option value="61">Handball</option>
                            <option value="71">Judo</option>
                            <option value="41">Pétanque</option>
                            <option value="81">Rugby</option>
                            <option value="101">Squash</option>
                            <option value="121">Taekwondo</option>
                            <option value="111">Tennis de table</option>
                            <option value="31">Tennis</option>
                            <option value="51">Jeux-vidéo</option>
                            <option value="91">Volley-ball</option>
                        </select></div>
                </div>
                <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_location">Lieu de ma
                        compétition</label>
                    <div class="col-md-5"><input type="text" id="protournoi_competitionbundle_competition_location" name="protournoi_competitionbundle_competition[location]" maxlength="255" class="form-control" /></div>
                </div>
                <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_description">Détails à propos
                        de ma compétition</label>
                    <div class="col-md-5"><textarea id="protournoi_competitionbundle_competition_description" name="protournoi_competitionbundle_competition[description]" class="ckeditor" style="width:100%" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_rules">Règles spécifiques à ma
                        compétition</label>
                    <div class="col-md-5"><textarea id="protournoi_competitionbundle_competition_rules" name="protournoi_competitionbundle_competition[rules]" class="ckeditor" style="width:100%" class="form-control"></textarea></div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <i class="fa fa-calendar"></i> Dates de ma compétition
                        </div>
                    </div>
                </legend>
                <div class="form-group ">
                    <label class="col-md-4 control-label" for="example-daterange1">Dates de début et
                        de fin *</label>
                    <div class="col-md-5">
                        <div class="input-group input-daterange" data-date-format="dd/mm/yyyy">
                            <input type="text" id="protournoi_competitionbundle_competition_beginDate" name="protournoi_competitionbundle_competition[beginDate]" required="required" placeholder="Début" readonly="readonly" class="form-control readonly-date" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                            <input type="text" id="protournoi_competitionbundle_competition_endDate" name="protournoi_competitionbundle_competition[endDate]" required="required" placeholder="Fin" readonly="readonly" class="form-control readonly-date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-md-4 control-label" for="hasRegistrationDeadline">Date limite
                        d&#039;inscription</label>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" id="hasRegistrationDeadline">
                            </div>
                            <div id="registrationDeadlineField" class="col-sm-10" style="visibility:hidden">
                                <input type="text" id="protournoi_competitionbundle_competition_registrationDeadline" name="protournoi_competitionbundle_competition[registrationDeadline]" class="input-datepicker form-control readonly-date" data-date-format="dd/mm/yyyy" placeholder="Entrez la date limite d&#039;inscription" readonly="readonly" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <i class="fa fa-ticket"></i> Inscriptions et paiement
                        </div>
                    </div>
                </legend>
                <div class="form-group ">
                    <div class="col-md-4"></div>
                    <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_playersCanRegister" name="protournoi_competitionbundle_competition[playersCanRegister]" class="form-control" value="1" checked="checked" />&nbsp; <label for="protournoi_competitionbundle_competition_playersCanRegister">Les
                            participants peuvent s&#039;inscrire eux-mêmes sur ProTournoi</label>
                    </div>
                </div>
                <div id="registrationOptions" class="">
                    <div class="form-group ">
                        <div class="col-md-4"></div>
                        <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_registrationValidation" name="protournoi_competitionbundle_competition[registrationValidation]" class="form-control" value="1" />&nbsp; <label for="protournoi_competitionbundle_competition_registrationValidation">Je
                                veux valider manuellement les inscriptions des participants</label>
                        </div>
                    </div>
                    <div id="onlinePayment" class="">
                        <div class="form-group ">
                            <div class="col-md-4"></div>
                            <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_isPaying" name="protournoi_competitionbundle_competition[isPaying]" class="form-control" value="1" />&nbsp; <label for="protournoi_competitionbundle_competition_isPaying">L&#039;inscription
                                    à ma compétition est payante</label></div>
                        </div>
                        <div id="paymentOptions" class="hidden">
                            <div class="form-group text-center">
                                <h4>Pour des raisons juridiques, la <a href='/app/creer-club'>création d'une structure</a> est
                                    obligatoire pour créer une compétition payante.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <i class="fa fa-sliders"></i> Options de ma compétition
                        </div>
                    </div>
                </legend>
                <div class="form-group ">
                    <div class="col-md-4"></div>
                    <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_hasPlanning" name="protournoi_competitionbundle_competition[hasPlanning]" class="form-control" value="1" />&nbsp; <label for="protournoi_competitionbundle_competition_hasPlanning">Je veux
                            activer la création automatique du planning en fonction des terrains et
                            des horaires</label></div>
                </div>
                <div class="form-group ">
                    <div class="col-md-4"></div>
                    <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_isVisible" name="protournoi_competitionbundle_competition[isVisible]" class="form-control" value="1" checked="checked" />&nbsp; <label for="protournoi_competitionbundle_competition_isVisible">Ma compétition
                            est visible dans les recherches de ProTournoi</label></div>
                </div>
                <div class="form-group ">
                    <div class="col-md-4"></div>
                    <div class="col-md-8"><input type="checkbox" id="protournoi_competitionbundle_competition_playersCanInputScores" name="protournoi_competitionbundle_competition[playersCanInputScores]" class="form-control" value="1" checked="checked" />&nbsp; <label for="protournoi_competitionbundle_competition_playersCanInputScores">Les
                            participants peuvent entrer eux-mêmes leurs résultats sur
                            ProTournoi</label></div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <i class="fa fa-trophy"></i> Organisation de ma compétition
                        </div>
                    </div>
                </legend>
                <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_nbPlayersPerCategory">Nombre
                        maximal de participants dans chaque catégorie *</label>
                    <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_nbPlayersPerCategory" name="protournoi_competitionbundle_competition[nbPlayersPerCategory]" required="required" pattern=".{1,}" class="form-control" /><span class="help-block">Vous pourrez ajuster ce paramètre pour chaque
                            catégorie à l&#039;étape 3</span></div>
                </div>
                <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_firstStepFormat">Format de la
                        première phase de compétition *</label>
                    <div class="col-md-5">
                        <div class="input-group input-group-without-padding"><select id="protournoi_competitionbundle_competition_firstStepFormat" name="protournoi_competitionbundle_competition[firstStepFormat]" class="select-select2" style="width:100%" class="form-control">
                                <option value="">Sélectionnez un format de compétition</option>
                                <option value="31">Championnat</option>
                                <option value="41">Championnat avec matchs aller et retour</option>
                                <option value="1">Poules</option>
                                <option value="11">Poules avec matchs aller et retour</option>
                                <option value="21">Tableau à élimination directe</option>
                                <option value="51">Tableau multi-chances</option>
                            </select><span class="input-group-btn"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-formats">Aide</button></span></div><span class="help-block">Vous pourrez ajuster ce paramètre pour chaque
                            catégorie à l&#039;étape 3</span>
                    </div>
                </div>
                <div id="modal-formats" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Aide sur les formats de compétition</h3>
                            </div>
                            <div class="modal-body">
                                <dl class="text-justify margin-dd">
                                    <dt>Championnat</dt>
                                    <dd>Dans ce format, chaque participant rencontre chaque autre
                                        participant une seule fois.</dd>
                                    <dt>Championnat avec matchs aller et retour</dt>
                                    <dd>Dans ce format, chaque participant rencontre chaque autre
                                        participant deux fois.</dd>
                                    <dt>Poules</dt>
                                    <dd>Dans ce format, chaque participant est assigné à un groupe
                                        et rencontre chaque autre participant de ce groupe une seule
                                        fois.</dd>
                                    <dt>Poules avec matchs aller et retour</dt>
                                    <dd>Dans ce format, chaque participant est assigné à un groupe
                                        et rencontre chaque autre participant de ce groupe deux
                                        fois.</dd>
                                    <dt>Tableau à élimination directe</dt>
                                    <dd>Dans ce format, les participants s&#039;affrontent deux par
                                        deux. Le perdant est éliminé et le gagnant qualifié pour le
                                        tour suivant.</dd>
                                    <dt>Tableau multi-chances</dt>
                                    <dd>Dans ce format, les participants s&#039;affrontent deux par
                                        deux. À chaque tour, les perdants sont basculés dans un
                                        tableau des perdants et les gagnants qualifiés pour le tour
                                        suivant. Le processus se répète pour chaque tableau des
                                        perdants, proposant ainsi à chaque participant un nombre
                                        similaire de matchs. À la fin, un classement est établi.
                                    </dd>
                                </dl>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <input type="hidden" id="protournoi_competitionbundle_competition_flow_createCompetition_step" name="flow_createCompetition_step" class="form-control" value="1" /><input type="hidden" id="protournoi_competitionbundle_competition__token" name="protournoi_competitionbundle_competition[_token]" class="form-control" value="xEYf2y6-mcaeqn0-GUjNLbz1LcT0GDp9pR91WAtmLI8" />
        <div class="form-group form-actions">
            <div class="text-center">
                <div class="craue_formflow_buttons craue_formflow_button_count_2">
                    <button type="submit" class="btn btn-lg btn-primary">Étape suivante&nbsp;<i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>