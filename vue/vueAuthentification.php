<style type="text/css">
    @import url("css/hello.css");
</style>

<body>
    <fieldset name="reines">
        <div id="containere">
            <h4>Connexion</h4>
            <form action="./?action=connexion" method="POST">
                <input name="mailU" type="email" placeholder="Entrer l'email de l'utilisateur" required>
                </br></br>
                <input name="mdpU" type="password" placeholder="Entrer le mot de passe" required>
                </br></br>
                <input type="submit" name="connection" value="Se connecter" />
            </form>
        </div>
        <h6>Cliquez ici pour vous <a href='./?action=inscription'>inscrire</a></h6>
</body>

</html>