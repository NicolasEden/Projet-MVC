<?php
ob_start();
?>
<main class="form">
    <form class="main" method="POST" id="form" enctype="multipart/form-data">
        <h2 id="title">Ha, te voilà !</h2>
            <svg class="checkmark" id="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
            <svg id="tick" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
            </svg>
            <div class="inputs" id="inputs">
                <div class="prenom">
                    <h6 class="valid" name="prenom">Prénom<span class="require">*</span></h6>
                    <input class="valid" type="text" maxlength="999" aria-label="E-mail" name="prenom" value="">
                </div>
                <div class="nom">
                    <h6 class="valid" name="nom">Nom<span class="require">*</span></h6>
                    <input class="valid" type="text" maxlength="999" aria-label="E-mail" name="nom" value="">
                </div>
                <div class="nationalite">
                    <h6 class="valid" name="nationalite">nationalité<span class="require">*</span></h6>
                    <select name="nationalite" class="valid">
                        <option value="">-- Merci de choisir une option--</option>
                        // Récupération de l'intégralité des Nationalités disponibles
                        <?php foreach ($nations as $nation)
                            echo '<option value="'.$nation->getLibelle().'">'.$nation->getLibelle().'</option>';
                        ?>
                    </select>
                </div>
                <div class="formation">
                    <h6 class="valid" name="formation">Type de la formation<span class="require">*</span></h6>
                    <select class="valid" name="formation" id="formation">
                        <option value="">-- Merci de choisir une option--</option>
                        <?php
                        // Récupération de l'intégralité des Types de Formation
                        foreach ($formations as $formation) {
                            echo '<option value="' . $formation->getLibelle() . '">' . $formation->getLibelle() . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="formateur">
                    <h6 class="valid" name="formateur">Formateurs<span class="require">*</span></h6>
                    <?php
                    $interation = 0;
                    foreach ($formateurs as $formateur) {
                        echo '
                        <div class="content unallow" id="';
                        foreach ($formateur->getTypeFormation() as $item) {
                            echo $item." ";
                        } echo '" style="order: '.$interation.';">
                            <div class="name">
                                <div id="'.$formateur->getIdFormateur().'" class="checkbox">
                                     <input type="checkbox" id="'.$formateur->getNom().'" disabled>
                                     <label id="'.$formateur->getPrenom().' '.$formateur->getNom().'" for="'.$formateur->getNom().'"><span>'.$formateur->getPrenom().' '.$formateur->getNom().' - Salle '.$formateur->getSalle().'</span></label>
                                </div>
                            </div>
                            <div class="input">
                                <div class="datestart">
                                    <h6 class="valid" name="datestart">Debut</h6>
                                    <input class="valid" type="date" maxlength="999" aria-label="E-mail" name="datestart" disabled>
                                </div>
                                <div class="dateend">
                                    <h6 class="valid" name="dateend">Fin</h6>
                                    <input class="valid" type="date" maxlength="999" aria-label="E-mail" name="dateend" disabled>
                                </div>
                            </div>
                        </div>';
                        $interation = $interation+1;
                    }
                    ?>
                </div>
                <div class="button">
                    <button type="submit" class="bloked" name="connexion">Inscription au stage</button>
                </div>
                <div class="info">
                    <p><span class="require">*</span> : obligatoire</p>
                </div>
            </div>
    </form>
</main>
<script src="./main.js" charset="utf-8"></script>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
