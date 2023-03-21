</head>
    <body>
    <div class="columns">
      <div class="column is-one-quarter">
      </div>
       <div class="column">
      <div class="box">
      <p align="center"><b>Êtes-vous sûr de vouloir trasférer votre bordereau ?</b></p></br>
      <div class="buttons">
        <form action="./?action=transfertValide" method="post" name="transfertNonValide" id="transfertNonValide">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="button is-info" name="transfertNonValide" onclick="transfertNonValideJS()">Annuler</button>
        </form>
           &nbsp; &nbsp; &nbsp; &nbsp;
        <form action="./?action=transfertValide" method="post" name="transfertValide" id="transfertValide">
          <button class="button is-primary" name="transfertValide" onclick="transfertValideJS()">Transférer</button>
        </form>
      </div>
    </div>
  </div>
<div class="column"></div>
</div>
</body>
      
