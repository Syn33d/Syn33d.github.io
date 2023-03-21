</head>
		<body>
			<h1 align="center"><b>Mes notes de frais</b></h1>
			<hr/>
			 <form name="bordereau" action="./?action=bordereauSoumisAD" method="post" id="formBordereau">
				<b>Je soussignée</b>
				<div class="field is-grouped">
 				 <p class="control">
					Nom : <input type="text" name="nom" value="<?php echo $demandeur['nom']?>" disabled>
				</p>
				<p class="control">
					Prénom : <input type="text" name="prenom" value="<?php echo $demandeur['prenom']?>" disabled>
				</p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<p class="control">
					Année civile : <input type="text" name="anneecivile" value=<?php echo $year[0];?> disabled>
				</p>
				</div>

				<b>Demeurant</b>
				<div class="field is-grouped">
 				 <p class="control">
					Adresse : <input type="text" name="adresse" value="<?php echo $demandeur['rue']?>" disabled>
				</p>
 				 <p class="control">
					Ville : <input type="text" name="ville" value="<?php echo $demandeur['ville']?>" disabled>
				</p>
				 <p class="control">
					Code Postal : <input type="text" name="cp" value="<?php echo $demandeur['cp']?>" disabled>
				</p>
				</div>
				</br>
				<p><b>certifie renoncer au frais de remboursement des frais ci-dessous et les laisser à l'associataion</b></p></br>
				<div class="field is-grouped">
 				 <p class="control">
					Adresse de l'Association<input type="text" name="adresseAsso" value="<?php echo $ligue['rue']?>" disabled>
				</p>
 				 <p class="control">
					Ville de l'Association<input type="text" name="villeAsso" value="<?php echo $ligue['ville']?>" disabled>
				</p>
				 <p class="control">
					Code Postal de l'Association : <input type="text" name="cpAsso" value="<?php echo $ligue['cp']?>"disabled>
				</p>
				</div>
				<p><b>en tant que don</b></p>
				</br>
				<p><b>Frais de déplacements</b></p>
				<table class="table" id="tab">
  					<thead>
    				<tr>
     				 <th>Date</th>
     				 <th>Motif</th>
     				 <th>Trajet</th>
     				 <th>Km parcourus</th>
     				 <th>Coût Trajet</th>
     				 <th>Péages</th>
     				 <th>Repas</th>
     				 <th>Hébergement</th>
     				 <th>Total</th>
     				</tr>
     				</thead>
     				<tbody>
    				<tr>
    				<td>
    					<input type="date" name="date1" id="date1">
    				</td>
    				<td>
    					<select name="motif1" id="motif1">
							<option value=1>Réunion</option>
							<option value=2>Compétition régionale</option>
							<option value=3>Compétition nationale</option>
							<option value=4>Compétition internationnale</option>
							<option value=5>Stage</option>

    					</select>
    				</td>
    				<td>
    					<input type="text" name="trajet1" id="trajet1">
    				</td>
    				<td>
    					<input type="number" name="kmParcourus1" id="kmParcourus1">
    				</td>
    				<td>
    					<input type="number" name="coutT1" id="coutT1">
    				</td>
    				<td>
    					<input type="number" name="peages1" id="peages1">
    				</td>
    				<td>
    					<input type="number" name="repas1" id="repas1">
    				</td>
    				<td>
    					<input type="number" name="hbgm1" id="hbgm1">
    				</td>
    				<td>
    					<input type="number" name="total1" id="total1" disabled>
    				</td>
    			</tr>
    			<p align="right"><a onClick="addLine()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAm0lEQVRIie2VWwqDMBBFDyLuSV1fq12XheI+mmyj/oxFG0y9CaU/OTAE8rg3QyYJFEQa4AZ44CWGAwbTOGRMEP6Ma8zA2aT2fNJvuk0mh6y7SCVYX4kCM/DI2MDXDORxNQOZvxtM7EtwZds35RicQaq6csgBtTj/Tt5N//1T4a3tEsR7a6OP3cC+xlPiEjNozMShCz9NPPrhFAIWeWFl+NYdGwYAAAAASUVORK5CYII="></a></p>
					</tbody>
				</table>
				<p class="control">
					<b>Montant total des dons :</b> <input type="text" name="mttTotal" id="mttTotal" disabled>
				</p></br>
    			<p><b>Je suis licencié(e) sous le n° de licence suivant :</b></p></br>
  				<div class="field is-grouped">
  				 <p class="control">	
     				 Nom de l'adhérent : <input type="text" name="nomAdhrt" value="<?php echo $demandeur['nom'];?>" disabled>
     			</p>
     			<p class="control">	
     				 Prénom de l'adhérent : <input type="text" name="prenomAdhrt" value="<?php echo $demandeur['prenom'];?>" disabled>
     			</p>
     			<p class="control">
     				 N° de licence : <input type="text" name="licenceAdhrt" value="<?php echo $demandeur['numeroLicence'];?>" disabled>
     			</p>
    			</div>
				<p><b>Pour bénéficier du reçu de dons, cette note de frais doit être accompagnée de toutes les justificatifs correspondants</b></p></br>
				<div class="field is-grouped">
 				 <p class="control">
					A : <input type="text" name="lieuSign" value="<?php echo $demandeur['ville'];?>" disabled>
				</p>
 				 <p class="control">
					Le : <input type="date" name="dateSign" value="<?php echo $date[0];?>" disabled>
				</p>
				 <p class="control">
					Signature du bénévole : <input type="text" name="sign">
				</p>
			</div>
			<p>
				<b>Partie réservée à l'association</b>
			</p></br>
			 <p class="control">
					N° d'orde du reçu : <input type="text" name="numRecu" disabled>
			 </p></br>
			  <p class="control">
					Remis le : <input type="date" name="dateRecu" disabled>
			 </p></br>
			  <p class="control">
					Signature du Trésorier : <input type="text" name="signTresor" disabled>
			 </p></br>
			 <div class="control">
			  <button class="button is-primary" onclick="subAD('')" name="valider">Valider</button>

			</div>
			</form>
		</br>
		</div>
		</body>
	</html>