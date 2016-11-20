<div class="demo-card-square mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title mdl-card--expand">
        <h2 class="mdl-card__title-text">Se connecter</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <p class="connect-form--text">
            Connectez vous à l'aide de votre code unique transmis par l'accueil.
        </p>
        <form role="form" action="Connexion/login.php" id="form">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="token">
                <label class="mdl-textfield__label" for="token">Identifiant unique</label>
            </div>
        </form>
    </div>
    <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick="document.getElementById('form').submit()">
            Se connecter
        </a>
    </div>
</div>
