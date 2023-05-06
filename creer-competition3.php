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
                    d'âge, de sexe, de niveau présentes à votre compétition. Vous pouvez
                    ajuster les paramètres pour chacune d'entre elles. Vous devez créer au
                    moins une catégorie.</h4>
            </div>
            <div class="categories col-md-12" data-prototype="" style="margin-top:10px">
                <div class="block" id="protournoi_competitionbundle_competition_categories_1">
                    

                    <div class="block-content" style="display: none;">
                        <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_categories_1_rules">Règles spécifiques à cette catégorie</label>
                            <div class="col-md-5"><textarea id="protournoi_competitionbundle_competition_categories_1_rules" name="protournoi_competitionbundle_competition[categories][1][rules]" class="ckeditor" style="width:100%">&lt;p&gt;RAs&lt;/p&gt;</textarea></div>
                        </div>

                        <div class="form-group ">
                            <label class="col-md-4 control-label" for="example-daterange1">Dates de début et de fin *</label>
                            <div class="col-md-5">
                                <div class="input-group input-daterange" data-date-format="dd/mm/yyyy">
                                    <input type="text" id="protournoi_competitionbundle_competition_categories_1_beginDate" name="protournoi_competitionbundle_competition[categories][1][beginDate]" placeholder="Début" class="form-control" value="08/05/2023">
                                    <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                                    <input type="text" id="protournoi_competitionbundle_competition_categories_1_endDate" name="protournoi_competitionbundle_competition[categories][1][endDate]" placeholder="Fin" class="form-control" value="18/05/2023">
                                </div>


                            </div>
                        </div>


                        <div class="form-group ">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" id="protournoi_competitionbundle_competition_categories_1_playersCanInputScores" name="protournoi_competitionbundle_competition[categories][1][playersCanInputScores]" class="form-control" value="1" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>&nbsp; <label for="protournoi_competitionbundle_competition_categories_1_playersCanInputScores">Les participants peuvent entrer eux-mêmes leurs résultats sur ProTournoi</label>
                            </div>
                        </div>

                        <div class="form-group "><label class="col-md-4 control-label required" for="protournoi_competitionbundle_competition_categories_1_nbPlayers">Nombre maximal de participants dans cette catégorie *</label>
                            <div class="col-md-5"><input type="number" id="protournoi_competitionbundle_competition_categories_1_nbPlayers" name="protournoi_competitionbundle_competition[categories][1][nbPlayers]" required="required" pattern=".{1,}" class="form-control" value="8"></div>
                        </div>

                        <div class="form-group "><label class="col-md-4 control-label" for="protournoi_competitionbundle_competition_categories_1_firstStepFormat">Format de la première phase de compétition *</label>
                            <div class="col-md-5">
                                <div class="select2-container select-select2" id="s2id_protournoi_competitionbundle_competition_categories_1_firstStepFormat" style="width:100%"><a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-1">Championnat</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen">Format de la première phase de compétition *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1">
                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                        <div class="select2-search"> <label for="s2id_autogen1_search" class="select2-offscreen">Format de la première phase de compétition *</label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder=""> </div>
                                        <ul class="select2-results" role="listbox" id="select2-results-1"> </ul>
                                    </div>
                                </div><select id="protournoi_competitionbundle_competition_categories_1_firstStepFormat" name="protournoi_competitionbundle_competition[categories][1][firstStepFormat]" class="select-select2" style="width: 100%; display: none;" tabindex="-1" title="Format de la première phase de compétition *">
                                    <option value=""></option>
                                    <option value="1">Poules</option>
                                    <option value="11">Poules avec matchs aller et retour</option>
                                    <option value="21">Tableau à élimination directe</option>
                                    <option value="31" selected="selected">Championnat</option>
                                    <option value="41">Championnat avec matchs aller et retour</option>
                                    <option value="51">Tableau multi-chances</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <a href="#" id="newteam" class="add_category_link btn btn-block btn-info btn-lg"><i class="fa fa-plus-circle"></i> Ajouter une nouvelle catégorie</a>
            </div>
            <div class="form-group"></div>
        </div>
        <input type="hidden" id="protournoi_competitionbundle_competition_flow_createCompetition_step" name="flow_createCompetition_step" class="form-control" value="3"><input type="hidden" id="protournoi_competitionbundle_competition__token" name="protournoi_competitionbundle_competition[_token]" class="form-control" value="xEYf2y6-mcaeqn0-GUjNLbz1LcT0GDp9pR91WAtmLI8">
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
<script src="./js/helpers/ckeditor/ckeditor.js"></script>
<script>
    function addTagForm(collectionHolder, $newLinkLi) {
        // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
        var prototype = collectionHolder.attr('data-prototype');

        // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
        // la longueur de la collection courante
        var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

        // Affiche le formulaire dans la page dans un li, avant le lien "ajouter un tag"
        $newLinkLi.before(newForm);
    }

    // Récupère le div qui contient la collection de tags
    var collectionHolder = $('.categories');

    // ajoute un lien « add a tag »
    var $addTagLink = $('<a href="#" class="add_category_link btn btn-block btn-info btn-lg"><i class="fa fa-plus-circle"></i> Ajouter une nouvelle catégorie</a>');
    var $newLinkLi = $addTagLink;

    jQuery(document).ready(function() {
        // ajoute l'ancre « ajouter un tag » et li à la balise ul
        collectionHolder.append($newLinkLi);

        function newCategory() {
            // empêche le lien de créer un « # » dans l'URL


            // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
            addTagForm(collectionHolder, $newLinkLi);

            // Initialisations JS
            // Initialize Select2
            var blockId = "#protournoi_competitionbundle_competition_categories___name__".replace(/__name__/g, collectionHolder.children().length - 1);
            console.log(blockId);
            $(blockId).find('.select-select2').select2();

            // Initialize icheck checkboxes
            $(blockId).find('input').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            // Initialize Datepicker
            $(blockId).find('.input-datepicker, .input-daterange').datepicker({
                weekStart: 1,
                language: "fr"
            });
            $(blockId).find('.input-datepicker-close').datepicker({
                weekStart: 1,
                language: "fr"
            }).on('changeDate', function(e) {
                $(this).datepicker('hide');
            });

            // Initalize interactive blocks
            $(blockId).find('[data-toggle="block-toggle-content"]').on('click', function() {
                var blockContent = $(this).closest('.block').find('.block-content');

                if ($(this).hasClass('active')) {
                    blockContent.slideDown();
                } else {
                    blockContent.slideUp();
                }

                $(this).toggleClass('active');
            });

            // CK editor
            CKEDITOR.replace($(blockId).find('.ckeditor').attr('id'));

            $(blockId).find('.remove-category').on('click', function() {
                $(this).closest('.block').remove();
            });
        }


        $addTagLink.on('click', function(e) {
            newCategory(e);
            e.preventDefault();
        });

        // Ajoute une première catégorie
        newCategory();

    });
</script>
