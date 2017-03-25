<?php ?>

<form class="app-account-card-login-form" action="#">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" id="login-email">
        <label class="mdl-textfield__label" for="login-email">E-mail</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" id="login-senha">
        <label class="mdl-textfield__label" for="login-senha">Senha</label>
    </div>

    <div class="app-account-card-spacer"></div>

    <div class="mdl-card__actions">
        <button onclick="toggleLoginResetForm(); return false;" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button">
            Redefinir Senha
        </button>
        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Entrar">
    </div>
</form>
