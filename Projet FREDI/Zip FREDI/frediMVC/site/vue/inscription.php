<body>
    <div class="columns">
        <div class="column is-one-quarter">
        </div>
        <div class="column is-half">
          <br/>
          <br/>
    <form class="box" action="./index.php?action=inscription" method="post">
        <h2 class="subtitle is-2">Inscription</h2>
      <p><input type="checkbox" onclick="incriptionModeControl()" name="ca" id="cAdh"/> Je suis un adherant</p>

      <div class="field" id="InputLicence" style="display: none;">
        <label class="label">Numéro de licence</label>
        <div class="control">
          <input class="input" type="text" placeholder="Numéro de licence" name="numLicence" />
        </div>
      </div>

      <div class="field" id="InputLigue" style="display: none;">
        <label class="label">Numéro de ligue</label>
        <div class="control">
          <input class="input" type="text" placeholder="Numéro de ligue" name="idligue"/>
        </div>
      </div>

      <div class="field">
        <label class="label">Nom</label>
        <div class="control">
          <input class="input" type="text" placeholder="nom" name="nom" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">Prenom</label>
        <div class="control">
          <input class="input" type="text" placeholder="prénom" name="prenom" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
          <input class="input" oninput="verif()" type="email" placeholder="e-mail" name="mail" id="mailorg" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">Confirmez votre e-mail</label>
        <div class="control">
          <input class="input" oninput="verif()" type="e-mail" placeholder="e-mail confirmation*" name="mailc" id="mailconf" required/>
        </div>
      </div>

      <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
          <input class="input" oninput="verif()" type="password" placeholder="********" name="mdp" id="mdporg" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Confirmez votre mot de passe</label>
        <div class="control">
          <input class="input" oninput="verif()" type="password" placeholder="********" name="mdpc" id="mdpconf" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Date de naissance</label>
        <div class="control">
          <input class="input" type="date" name="datenaiss" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Rue</label>
        <div class="control">
          <input class="input" type="text" placeholder="rue" name="rueAddr" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Code postale</label>
        <div class="control">
          <input class="input" type="text" placeholder="code postale" name="cpAddr" required>
        </div>
      </div>

      <div class="field">
        <label class="label">ville</label>
        <div class="control">
          <input class="input" type="text" placeholder="ville" name="villeAddr" required>
        </div>
      </div>

      <!-- <button class="button is-primary" disabled>Valider</button> -->
      <p>
        <br/>
        <input type="submit" class="button is-primary" id="sub" value="S'inscrire" name="subinscription" disabled />
        <p align="right"> <b>Si vous avez déjà un compte FREDI </b> <a href="./index.php?action=connexion"> cliquez ici. </a></p>
      </p>
    </form>
    <?= $msgerr ?> <!-- Affichage du message d'erreur valoriser dans le controleur : inscription.php -->
    <?= $msgres ?> <!-- Affichage du message de réussite valoriser dans le controleur : inscription.php -->
</div>
<div class="column is-one-quarter"></div>
</div>
</body>