<body>
    <div class="columns">
        <div class="column is-one-quarter">
        </div>
        <div class="column is-half">
          <br/>
          <br/>
    <form class="box" action="./index.php?action=profil" method="post">
        <h2 class="subtitle is-2">Mon profil</h2>

      <div class="field">
        <label class="label">Nom</label>
        <div class="control">
          <input class="input" type="text" value=<?php echo $demandeur['nom'];?> name="nom" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">Prénom</label>
        <div class="control">
          <input class="input" type="text" value=<?php echo $demandeur['prenom']; ?> name="prenom" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
          <input class="input" oninput="verif()" type="email" value=<?php echo $demandeur['adresseMail']; ?> name="mail" id="mailorg" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">E-mail confirmé</label>
        <div class="control">
          <input class="input" oninput="verif()" type="e-mail"  name="mailc" id="mailconf" placeholder="Confirmez votre Email" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
          <input class="input" oninput="verif()" type="password" name="mdp" id="mdporg" placeholder="Nouveau mot de passe" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Mot de passe confirmé</label>
        <div class="control">
          <input class="input" oninput="verif()" type="password" placeholder="********" name="mdpc" id="mdpconf" placeholder="confirmez votre mot de passe"required>
        </div>
      </div>

      <div class="field">
        <label class="label">Date de naissance</label>
        <div class="control">
          <input class="input" type="date" name="datenaiss" value=<?php echo $demandeur['dateNaiss']; ?> required>
        </div>
      </div>

      <div class="field">
        <label class="label">Rue</label>
        <div class="control">
          <input class="input" type="text" value="<?php echo $demandeur['rue']; ?>" name="rueAddr" size="100" required >
        </div>
      </div>

      <div class="field">
        <label class="label">Code postale</label>
        <div class="control">
          <input class="input" type="text" value=<?php echo $demandeur['cp']; ?> name="cpAddr" required>
        </div>
      </div>

      <div class="field">
        <label class="label">ville</label>
        <div class="control">
          <input class="input" type="text" value=<?php echo $demandeur['ville']; ?> name="villeAddr" required>
        </div>
      </div>

      <!-- <button class="button is-primary" disabled>Valider</button> -->
      <p>
        <br/>
        <input type="submit" class="button is-primary" id="sub" value="Modifier" name="modification" disabled />
      </p>
    </form>
    <?= $msgerr ?> <!-- Affichage du message d'erreur valoriser dans le controleur : profil.php -->
    <?= $msgres ?>
</div>
<div class="column is-one-quarter"></div>
</div>
</body>