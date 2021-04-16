<?php
ob_start();
?>
    <main class="main-auth">
        <div class="main-div-auth">
            <div class="container-auth a-container" id="a-container">
                <form class="form" id="a-form" method="POST" action="/action_page.php">
                    <input class="form__input" type="text" required name="lastname" placeholder="Nom">
                    <input class="form__input" type="text" required name="firstname" placeholder="Prénom">
                    <input class="form__input" type="email" required name="email" placeholder="Adresse E-MAIL">
                    <input class="form__input" type="password" required name="password" placeholder="Mot de passe">
                    <input class="form__input" type="password" required name="confirmPassword" placeholder="Confirmation Mot de passe">
                    <button class="form__button button submit" type="submit">INSCRIPTION</button>
                </form>
            </div>
            <div class="container-auth b-container" id="b-container">
                <form class="form" id="b-form" method="" action="">
                    <h2 class="form_title title">Connexion</h2>
                    <input class="form__input" type="text" required name="email" placeholder="Adresse E-MAIL">
                    <input class="form__input" type="password" required name="password" placeholder="Mot de passe">
                    <a class="form__link">Mot de passe oublié?</a>
                    <button class="form__button button submit" type="submit">CONNEXION</button>
                </form>
            </div>
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div>
                <div class="switch__circle switch__circle--t"></div>
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Ha, te revoilà ?</h2>
                    <p class="switch__description description">Pour rester connecté avec nous, veuillez vous connecter avec vos informations</p>
                    <button class="switch__button button switch-btn">CONNEXION</button>
                </div>
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">Salut l'ami !</h2>
                    <p class="switch__description description">Entrez vos informations personnelles et commencez votre voyage avec nous</p>
                    <button class="switch__button button switch-btn">INSCRIPTION</button>
                </div>
            </div>
        </div>
    </main>
<?php

$content = ob_get_clean();
$titre = "Home";
require VIEWS . 'layout.php';
