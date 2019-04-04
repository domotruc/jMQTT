<form class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{Nom de l'équipement}}</label>
            <div class="col-sm-3">
                <input type="text" class="eqLogicAttr form-control" data-l1key="id" style="display: none;" /> <input
                    type="text" class="eqLogicAttr form-control" data-l1key="name"
                    placeholder="{{Nom de l'équipement jMQTT}}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{Objet parent}}</label>
            <div class="col-sm-3">
                <select class="form-control eqLogicAttr" data-l1key="object_id">
                    <option value="">{{Aucun}}</option>
                    <?php
                    foreach (object::all() as $object) {
                        echo '<option value="' . $object->getId() . '">' . $object->getName() . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">{{Catégorie}}</label>
            <div class="col-sm-8">
                <?php
                foreach (jeedom::getConfiguration('eqLogic:category') as $key => $value) {
                    echo '<label class="checkbox-inline">';
                    echo '<input type="checkbox" class="eqLogicAttr" data-l1key="category" data-l2key="' . $key . '" />' .
                        $value['name'];
                    echo '</label>';
                }
                ?>

                </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-8">
                <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isEnable" checked />{{Activer}}</label>
                <label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isVisible" checked />{{Visible}}</label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">{{Commentaire}}</label>
            <div class="col-sm-3">
                <textarea class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="commentaire"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">{{Inscrit au Topic}}</label>
            <div class="col-sm-3">
                <input id="mqtttopic" type="text" class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="topic"
                    placeholder="{{Topic principal de l'équipement jMQTT}}" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">{{Ajout automatique des commandes}}</label>
            <div class="col-sm-3">
                <input type="checkbox" class="eqLogicAttr" data-l1key="configuration" data-l2key="auto_add_cmd" checked />
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label">{{Qos}}</label>
            <div id="mqttqos" class="col-sm-3">
                <select style="width: 40pxpx;" class="eqLogicAttr form-control input-sm" data-l1key="configuration"
                    data-l2key="Qos">
                    <option value="0">0</option>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">{{Dernière Activité}}</label>
            <div class="col-sm-3">
                <span class="eqLogicAttr" data-l1key="configuration" data-l2key="updatetime"></span>
            </div>
        </div>

        <div id='sel_icon_div' class="form-group">
            <label class="col-sm-3 control-label">{{Catégorie du topic}}</label>
            <div class="col-sm-3">
                <select id="sel_icon" class="form-control eqLogicAttr" data-l1key="configuration" data-l2key="icone">
                    <option value="">{{Aucun}}</option>
                    <option value="433">{{RF433}}</option>
                    <option value="barometre">{{Baromètre}}</option>
                    <option value="boiteauxlettres">{{Boite aux Lettres}}</option>
                    <option value="chauffage">{{Chauffage}}</option>
                    <option value="compteur">{{Compteur}}</option>
                    <option value="contact">{{Contact}}</option>
                    <option value="feuille">{{Culture}}</option>
                    <option value="custom">{{Custom}}</option>
                    <option value="dimmer">{{Dimmer}}</option>
                    <option value="energie">{{Energie}}</option>
                    <option value="garage">{{Garage}}</option>
                    <option value="humidity">{{Humidité}}</option>
                    <option value="humiditytemp">{{Humidité et Température}}</option>
                    <option value="hydro">{{Hydrométrie}}</option>
                    <option value="ir2">{{Infra Rouge}}</option>
                    <option value="jauge">{{Jauge}}</option>
                    <option value="light">{{Luminosité}}</option>
                    <option value="meteo">{{Météo}}</option>
                    <option value="motion">{{Mouvement}}</option>
                    <option value="multisensor">{{Multisensor}}</option>
                    <option value="prise">{{Prise}}</option>
                    <option value="relay">{{Relais}}</option>
                    <option value="rfid">{{RFID}}</option>
                    <option value="teleinfo">{{Téléinfo}}</option>
                    <option value="temp">{{Température}}</option>
                    <option value="thermostat">{{Thermostat}}</option>
                    <option value="volet">{{Volet}}</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div style="text-align: center">
                <img name="icon_visu" src="" width="160" height="200" />
            </div>
        </div>

    </fieldset>
</form>