	</head>
		<body>
			<h1 align="center"><b>Mes notes de frais</b></h1>
			<hr/>
			 <form name="bordereau" action="./?action=bordereauSoumisAD" method="post" id="formBordereau">
				<b>Je soussignée</b>
				<div class="field is-grouped">
 				 <p class="control">
					Nom : <input type="text" name="nom" value="<?php echo $demandeur['nom'];?>" disabled>
				</p>
				<p class="control">
					Prénom : <input type="text" name="prenom" value="<?php echo $demandeur['prenom'];?>" disabled>
				</p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<p class="control">
					Année civile : <input type="text" name="anneecivile" value="<?php echo $year[0];?>" disabled>
				</p>
				</div>

				<b>Demeurant</b>
				<div class="field is-grouped">
 				 <p class="control">
					Adresse : <input type="text" name="adresse" value="<?php echo $demandeur['rue'];?>" disabled>
				</p>
 				 <p class="control">
					Ville : <input type="text" name="ville" value="<?php echo $demandeur['ville'];?>" disabled>
				</p>
				 <p class="control">
					Code Postal : <input type="text" name="cp" value="<?php echo $demandeur['cp'];?>" disabled>
				</p>
				</div>
				</br>
				<p><b>certifie renoncer au frais de remboursement des frais ci-dessous et les laisser à l'associataion</b></p></br>
				<div class="field is-grouped">
 				 <p class="control">
					Adresse de l'Association : <input type="text" name="adresseAsso" value="<?php echo $ligue['rue']?>"disabled>
				</p>
 				 <p class="control">
					Ville de l'Association : <input type="text" name="villeAsso" value="<?php echo $ligue['ville']?>"disabled>
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
     				 <th><a onClick="addLine()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAm0lEQVRIie2VWwqDMBBFDyLuSV1fq12XheI+mmyj/oxFG0y9CaU/OTAE8rg3QyYJFEQa4AZ44CWGAwbTOGRMEP6Ma8zA2aT2fNJvuk0mh6y7SCVYX4kCM/DI2MDXDORxNQOZvxtM7EtwZds35RicQaq6csgBtTj/Tt5N//1T4a3tEsR7a6OP3cC+xlPiEjNozMShCz9NPPrhFAIWeWFl+NYdGwYAAAAASUVORK5CYII="></a></th>
     				</tr>
     				</thead>
     				<tbody>
    				<tr>
    				<td>
    					<input type="date" name="date1" id="date1" value="<?php echo $date0?>">
    				</td>
    				<td>
    					<select name="motif1" id="motif1">
							<option id="motif1option1" value=1 >Réunion</option>
							<option id="motif1option2" value=2>Compétition régionale</option>
							<option id="motif1option3" value=3>Compétition nationale</option>
							<option id="motif1option4" value=4>Compétition internationnale</option>
							<option id="motif1option5" value=5>Stage</option>
    					</select>
    					<?php
    					echo'<script type="text/javascript">';
    						echo'addNumberOfLine('.$count.')';
    						echo'</script>';
    							for($i=0;$i<$count;$i++){
    							echo'<script type="text/javascript">';
    							echo'selectedValue('.($i+1).','.${'motif'.$i}.')';
    							echo'</script>';
    							}
    					?>
    				</td>
    				<td>
    					<input type="text" name="trajet1" id="trajet1" value="<?php echo $trajet0;?>">
    				</td>
    				<td>
    					<input type="number" name="kmParcourus1" id="kmParcourus1" value="<?php echo $kmParcourus0;?>">
    				</td>
    				<td>
    					<input type="number" name="coutT1" id="coutT1" value=<?php echo $coutT0;?>>
    				</td>
    				<td>
    					<input type="number" name="peages1" id="peages1" value="<?php echo $peages0;?>">
    				</td>
    				<td>
    					<input type="number" name="repas1" id="repas1" value="<?php echo $repas0;?>">
    				</td>
    				<td>
    					<input type="number" name="hbgm1" id="hbgm1" value="<?php echo $hbgm0;?>">
    				</td>
    				<td>
    					<input type="number" name="total1" id="total1" value="<?php echo $total0;?>" disabled>
    				</td>
    			</tr>
					</tbody>
				</table>
				<?php
						for($j=1;$j<$count;$j++){
    						echo'<script type="text/javascript">';
    						echo'setValue('.($j+1).',"'.${'date'.$j}.'","'.${'trajet'.$j}.'",'.${'coutT'.$j}.",".${'kmParcourus'.$j}.','.${'peages'.$j}.','.${'repas'.$j}.','.${'hbgm'.$j}.')';
    						echo'</script>';
    						echo'<script type="text/javascript">';
    						echo'setMttTotal('.($j+1).','.${'total'.$j}.')';
    						echo'</script>';
    					}
    			?>
    			 <p class="control">
					<b>Montant total des dons :</b> <input type="text" name="mttTotal" id="mttTotal"  value="<?php echo $mttTotalDons;?>" disabled>
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
					A : <input type="text" name="lieuSign" id="lieuSign" value="<?php echo $demandeur['ville'];?>" disabled>
				</p>
 				 <p class="control">
					Le : <input type="date" name="dateSign" id="dateSign" value="<?php echo $date[0];?>" disabled>
				</p>
				 <p class="control">
					Signature du bénévole : <input type="text" name="sign" id="sign">
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
			  <button class="button is-primary" onclick="subAD('modif')" name="valider">Valider</button>

			</div>
			</form>
		</br>
		</div>
		</body>
	</html>