<body>

    <div class="columns">
        <div class="column is-one-quarter">
        </div>
        <div class="column is-half">

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    <form class="box" method="POST" action="./index.php?action=connexion.php">
        <h2 class="subtitle is-2">Bienvenue sur l'application FREDI</h2>

        <p> <b> <u> Connectez-vous </u></b> </p>
        <br/>
      <b><p><input type="checkbox" name="ca"/> Je suis un adhérent</p></b></br>
      <div class="field">
        <label class="label">E-mail :</label>
        <div class="control">
          <input class="input" type="email" placeholder="mail" name = "mail">
        </div>
      </div> 

      <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
        <input class="input" type="password" placeholder="********" name = "mdp">
        </div>
      </div>

      <br/>
      <button class="button button is-rounded is-black is-outlined" type="submit" name="Valideur">Valider</button>
      <br/>
      <br/>
      <label style="display: block;width: 100%;"> Nouveau sur FREDI ? <a href="./index.php?action=inscription">cliquez ici.</a> <div style="float: right;"> Mot de passe oublié ? <a href="recupMdp.html">cliquez ici.</a></div> </label>
    </form>
     <?= $msgerr ?> <!-- Affichage du message d'erreur valoriser dans le controleur : connexion.php -->
</div>
<div class="column is-one-quarter"> </div>
</div>
</body>