<style type="text/css">
    @import url("css/hello.css");
</style>
<form class="form_content" action="./?action=modifier" method="get">
    <fieldset name="cheval">
        <div class="container">
            <input type="text" name="txtNomEquipe" placeholder="Saisir un nom d'Equipe"><br />
            <select name="listeclub">
                <option> Choisir le club </option>
                <?php foreach ($Club as $UnClub) { ?>
                    <option value="<?php echo $UnClub->num_club; ?>"><?php echo $UnClub->nom_club; ?></option>
                <?php } ?>
            </select></br>
            <select name="listechamp">
                <option> Choisir le championnat </option>
                <?php foreach ($Championnat as $UnChampionnat) { ?>
                    <option value="<?php echo $UnChampionnat->num_championnat; ?>"><?php echo $UnChampionnat->nom_championnat; ?></option>
                <?php } ?>
            </select>
            </br>
            <input type="submit" name="valider" value="VALIDER" />
        </div>
    </fieldset>
</form>