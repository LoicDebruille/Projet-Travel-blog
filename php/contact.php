<?php

$message = '';

//* traitement des données d'un formulaire
/// On ne traite les données que si le tableau contenu dans $_POST n'est pas vide
if (empty($_POST) === false) {

  //* Etape 1 : On vérifie les données saisies
  if (isset($_POST['email'])) {
    //* filter_input est une fonction qui nous permet de vérifier un format, 
  
    $validEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($validEmail === false) {
      // si une des données n'est pas correcte,
      // on demande à l'utilisateur de recommencer la saisie
      $message = 'vous avez saisi un email invalide, veuillez recommencer la saisie du formulaire';
    }
  }

  //* Etape 2 : On traite les données
}


$classLeft = 'left--contact';

include 'inc/header.tpl.php';
?>

<h2 class="right__title">Nous contacter</h2>
<div class="posts">
    <div class="post post--solo">
        <p class="single">
            <?php if ($message != '') : ?>
        <p class="alert"><?= $message ?></p>
        <?php endif; ?>
        <!-- La balise form délimite un formulaire -->
        <!-- l'attribut action va indiquer vers quelle page rediriger après validation du formulaire -->
        <!-- l'attribut method correspond aux méthodes HTTP -->
        <!-- Dans le cas du formulaire HTML, on peut utiliser la méthode HTTP GET et la méthode POST -->
        <form action="contact.php" method="post" class="contact-form">

            <fieldset class="contact-form__row">
                <legend>Identité</legend>

                <div>
                    <span>Je suis </span>
                    <input type="radio" name="gender" id="genderMrs" value="madame">
                    <label for="genderMrs">une femme</label> /
                    <input type="radio" name="gender" id="genderMr" value="monsieur">
                    <label for="genderMr">un homme</label>
                </div>

                <div class="form-row">
                    <label for="firstname">Mon prénom est</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Tintin">
                </div>

                <div class="form-row">
                    <label for="lastname">Et mon nom,</label>
                    <input type="text" name="lastname" id="lastname" value="<?= $_POST['lastname'] ?? '' ?>"
                        placeholder="Dupont">
                </div>

                <div class="form-row">
                    <label for="source" class="contact-form__label">J'ai connu ce site grâce à</label>
                    <select name="source" id="source" class="contact-form__item">
                        <option value="">choisir</option>
                        <option value="fb">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="google">Google</option>
                        <option value="bouche-a-oreilles">Bouche à oreilles</option>
                        <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

            </fieldset>

            <fieldset class="contact-form__row">
                <legend>Message</legend>

                <div>
                    <label for="email">Répondez-moi via</label>
                    <input type="email" name="email" id="email" placeholder="Adresse e-mail" class="contact-form__item">
                </div>

                <div>
                    <label for="message" class="contact-form__label">Pour laisser un commentaire libre c'est par ici
                        :</label>
                    <textarea name="message" id="message" placeholder="Votre message"
                        class="contact-form__item contact-form__item--textarea "></textarea>
                </div>

            </fieldset>


            <fieldset>
                <input type="checkbox" name="infos-ok" id="infos-ok"
                    class="contact-form__item contact-form__item--checkbox">
                <label for="infos-ok">Je certifie la véracité de ces informations</label>
            </fieldset>


            <button type="submit">Envoyer</button>

        </form>

        </p>
        <a href="./index.php" class="post__link">back to home</a>
    </div>
</div>

<?php
include 'inc/footer.tpl.php';
?>