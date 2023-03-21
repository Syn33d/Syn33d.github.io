</head>
		<body>
		<br/>
		<div class="columns">
  		<div class="column is-one-quarter">
  		</div>
  		 <div class="column">
  		 	<p align="center"><b>Transférer mon bordereau</b></p>
		 <div class="box"><div class="buttons">
  		 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					      	<?php 
					      	if($modeCo==0){
					        	echo('<a href="./?action=modifBordereauRL"><button class="button is-info">Modifier mon bordereau</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
					        }else{
					        	echo('<a href="./?action=modifBordereauAD"><button class="button is-info">Modifier mon bordereau</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
					        }
					    ?>
					    <form name="transfert" action="./?action=transfert" method="post" id="formTransfert">
					    <?php
					      	if($modeCo==0){
					      		if($nbrLignesFrais>=1 && $nbrAD>=1){
					      			echo('<button class="button is-primary" type="submit" name="transferer">Transférer mon bordereau</button>');
					      		}else{
					      			echo('<button class="button is-primary" type="submit"  name="transferer" disabled>Transférer mon bordereau</button>');
					      		}
					        }else{
					        	if($nbrLignesFrais>=1){
					        		echo('<button class="button is-primary" type="submit"  name="transferer">Transférer mon bordereau</button>');
					        	}else{
					        		echo('<button class="button is-primary" type="submit"  name="transferer"disabled>Transférer mon bordereau</button>');
					        	}
					        }
					        
					        ?>
					    </form>
					    </div>
						</div>
					    </div>
  						<div class="column"></div>
					</div>
		</body>