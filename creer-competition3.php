<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-magic"></i>Créer une compétition<br><small>En seulement 3 étapes
                !</small>
        </h1>
    </div>
</div>
<div class="block">
    <form class="form-horizontal form-bordered ui-formwizard" name="protournoi_competitionbundle_competition" method="POST">
        <div class="step ui-formwizard-content">
            <div class="wizard-steps">
                <div class="row">
                    <div class="col-xs-3 ">
                        <span>1. Général</span>
                    </div>
                    <div class="col-xs-3 ">
                        <span>2. Sport</span>
                    </div>
                    <div class="col-xs-3 active">
                        <span>3. Catégories</span>
                    </div>
                    <div class="col-xs-3 ">
                        <span>4. Dons</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="sub-header text-justify">Indiquez ici les différentes catégories
                    d&#039;âge, de sexe, de niveau présentes à votre compétition. Vous pouvez
                    ajuster les paramètres pour chacune d&#039;entre elles. Vous devez créer au
                    moins une catégorie.</h4>
            </div>
            <div class="categories col-md-12" data-prototype="&lt;div class=&quot;block&quot; id=&quot;protournoi_competitionbundle_competition_categories___name__&quot;&gt;
	&lt;div class=&quot;block-title&quot; style=&quot;margin-bottom: 0px&quot;&gt;
		&lt;h2 style=&quot;padding-top: 10px; padding-bottom: 10px; width:50%&quot;&gt;&lt;input type=&quot;text&quot;     id=&quot;protournoi_competitionbundle_competition_categories___name___name&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][name]&quot; required=&quot;required&quot; maxlength=&quot;255&quot; placeholder=&quot;Nom de la catégorie *&quot;
    class=&quot;form-control&quot;
 /&gt;&lt;/h2&gt;
			&lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-info active&quot; data-toggle=&quot;block-toggle-content&quot; style=&quot;width:24%&quot;&gt; Plus d&amp;#039;options&lt;/a&gt;
			&lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-primary active remove-category&quot; style=&quot;width:24%&quot;&gt;&lt;i class=&quot;fa fa-trash-o&quot;&gt;&lt;/i&gt; Supprimer&lt;/a&gt;
		
	&lt;/div&gt;
	
	&lt;div class=&quot;block-content&quot; style=&quot;display: none;&quot;&gt;
		&lt;div class=&quot;form-group &quot;&gt;&lt;label class=&quot;col-md-4 control-label&quot; for=&quot;protournoi_competitionbundle_competition_categories___name___rules&quot;&gt;Règles spécifiques à cette catégorie&lt;/label&gt;&lt;div class=&quot;col-md-5&quot;&gt;&lt;textarea     id=&quot;protournoi_competitionbundle_competition_categories___name___rules&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][rules]&quot; class=&quot;ckeditor&quot; style=&quot;width:100%&quot;
    class=&quot;form-control&quot;
&gt;&amp;lt;p&amp;gt;RAs&amp;lt;/p&amp;gt;&lt;/textarea&gt;&lt;/div&gt;&lt;/div&gt;
		
			&lt;div class=&quot;form-group &quot;&gt;
				&lt;label class=&quot;col-md-4 control-label&quot; for=&quot;example-daterange1&quot;&gt;Dates de début et de fin *&lt;/label&gt;
				&lt;div class=&quot;col-md-5&quot;&gt;
					&lt;div class=&quot;input-group input-daterange&quot; data-date-format=&quot;dd/mm/yyyy&quot;&gt;
						&lt;input type=&quot;text&quot;     id=&quot;protournoi_competitionbundle_competition_categories___name___beginDate&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][beginDate]&quot; placeholder=&quot;Début&quot;
    class=&quot;form-control&quot;
 value=&quot;08/05/2023&quot; /&gt;
						&lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
						&lt;input type=&quot;text&quot;     id=&quot;protournoi_competitionbundle_competition_categories___name___endDate&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][endDate]&quot; placeholder=&quot;Fin&quot;
    class=&quot;form-control&quot;
 value=&quot;18/05/2023&quot; /&gt;
					&lt;/div&gt;
					    
					    
				&lt;/div&gt;
			&lt;/div&gt;
					    
		    		    
		&lt;div class=&quot;form-group &quot;&gt;&lt;div class=&quot;col-md-4&quot;&gt;&lt;/div&gt;&lt;div class=&quot;col-md-8&quot;&gt;&lt;input type=&quot;checkbox&quot;     id=&quot;protournoi_competitionbundle_competition_categories___name___playersCanInputScores&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][playersCanInputScores]&quot;
    class=&quot;form-control&quot;
 value=&quot;1&quot; checked=&quot;checked&quot; /&gt;&amp;nbsp;                &lt;label for=&quot;protournoi_competitionbundle_competition_categories___name___playersCanInputScores&quot;&gt;Les participants peuvent entrer eux-mêmes leurs résultats sur ProTournoi&lt;/label&gt;&lt;/div&gt;&lt;/div&gt;
		
			&lt;div class=&quot;form-group &quot;&gt;&lt;label class=&quot;col-md-4 control-label required&quot; for=&quot;protournoi_competitionbundle_competition_categories___name___nbPlayers&quot;&gt;Nombre maximal de participants dans cette catégorie *&lt;/label&gt;&lt;div class=&quot;col-md-5&quot;&gt;&lt;input type=&quot;number&quot;     id=&quot;protournoi_competitionbundle_competition_categories___name___nbPlayers&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][nbPlayers]&quot; required=&quot;required&quot; pattern=&quot;.{1,}&quot;
    class=&quot;form-control&quot;
 value=&quot;8&quot; /&gt;&lt;/div&gt;&lt;/div&gt;		
		
			&lt;div class=&quot;form-group &quot;&gt;&lt;label class=&quot;col-md-4 control-label&quot; for=&quot;protournoi_competitionbundle_competition_categories___name___firstStepFormat&quot;&gt;Format de la première phase de compétition *&lt;/label&gt;&lt;div class=&quot;col-md-5&quot;&gt;&lt;select     id=&quot;protournoi_competitionbundle_competition_categories___name___firstStepFormat&quot; name=&quot;protournoi_competitionbundle_competition[categories][__name__][firstStepFormat]&quot; class=&quot;select-select2&quot; style=&quot;width:100%&quot;
    class=&quot;form-control&quot;
&gt;&lt;option value=&quot;&quot;&gt;&lt;/option&gt;&lt;option value=&quot;1&quot;&gt;Poules&lt;/option&gt;&lt;option value=&quot;11&quot;&gt;Poules avec matchs aller et retour&lt;/option&gt;&lt;option value=&quot;21&quot;&gt;Tableau à élimination directe&lt;/option&gt;&lt;option value=&quot;31&quot; selected=&quot;selected&quot;&gt;Championnat&lt;/option&gt;&lt;option value=&quot;41&quot;&gt;Championnat avec matchs aller et retour&lt;/option&gt;&lt;option value=&quot;51&quot;&gt;Tableau multi-chances&lt;/option&gt;&lt;/select&gt;&lt;/div&gt;&lt;/div&gt;
			
				&lt;/div&gt;
&lt;/div&gt;

         " style="margin-top:10px">
            </div>
            <div class="form-group"></div>
        </div>
        <input type="hidden" id="protournoi_competitionbundle_competition_flow_createCompetition_step" name="flow_createCompetition_step" class="form-control" value="3" /><input type="hidden" id="protournoi_competitionbundle_competition__token" name="protournoi_competitionbundle_competition[_token]" class="form-control" value="xEYf2y6-mcaeqn0-GUjNLbz1LcT0GDp9pR91WAtmLI8" />
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