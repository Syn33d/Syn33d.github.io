
		<body>
			<h3><b>&nbsp Bonjour </b><?php echo''.$demandeur['prenom'].' '.$demandeur['nom'];?>,</h3>
		</br> 
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		<?php
		if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
			echo('<h3 align="center"><b>Votre bordereau a été transféré ou la période de saisie de frais a été clôturée, ainsi l\'accès à votre profil et à votre bordereau ont été désactivés');
		}else{
			echo('<h3 align="center"><b>Vous pouvez modifier votre bordereau jusqu\'au 24/12/'.$year[0].'</b></h3>');
		}
		
			
		
		?>
		</body>