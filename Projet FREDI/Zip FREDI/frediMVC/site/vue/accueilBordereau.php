</head>
		<body>
		<br/>
		<div class="columns">
        	<div class="column is-one-quarter"></div>
        	<div class="column is-half">
					<div class="card">
						  <div class="card-content">
						    <p class="title">
						      <h1 align="center"><b>Mon bordereau</b></h1>						      
						    </p>
						  </div>
						  <footer class="card-footer">
						    <p class="card-footer-item">
						      <span>
						      <?php
						      	if($ligne>=1){
						      		if($modeCo==0){
						      		 echo'<a href="./?action=modifBordereauRL"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABTElEQVRYhe2WS0oDQRCGv0h2IiYLgxoXmkMIPu7mAQQfy6y8iytNDPgA3xhH1BPo1nEx3aRsOzOBqUo280PD0AX9VVf9Pd1QqZKN6sAeMATegSNgflrwReAUSINxAyxMA34WgfvRtYQ3gPMceAp8ATUreK8AngLfFglI+DMwyEngRBveBPpu8Sdgzc3FknhxyapJ7vzRwWOxFEiAjiW8HcTlaZgp/BXY0ITLnj9E4PIomsNXc+BDYF0bfuEWvx8D921Rhy8BVxPCw9OgAr8W8JUgLtsSM6Qa/K4AHjNkKbUmgHtPxAxZSjXgktEd3gri0hOx5Epryy3+4WAh3FfmFljWhgMcOsB+Dtxk55CVP3GQTTFf5Ak1bTP6jc6RteMA+GS8J1Tly58Ab/y9zwf894SqZPnlPX4M7GL0lpPamQW0Lr5/yIzXt4ZWkvoFsW+aifnExvwAAAAASUVORK5CYII="></a>
						      			</span>
						   				 </p>';
						   			}else{
						   				echo'<a href="./?action=modifBordereauAD"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABTElEQVRYhe2WS0oDQRCGv0h2IiYLgxoXmkMIPu7mAQQfy6y8iytNDPgA3xhH1BPo1nEx3aRsOzOBqUo280PD0AX9VVf9Pd1QqZKN6sAeMATegSNgflrwReAUSINxAyxMA34WgfvRtYQ3gPMceAp8ATUreK8AngLfFglI+DMwyEngRBveBPpu8Sdgzc3FknhxyapJ7vzRwWOxFEiAjiW8HcTlaZgp/BXY0ITLnj9E4PIomsNXc+BDYF0bfuEWvx8D921Rhy8BVxPCw9OgAr8W8JUgLtsSM6Qa/K4AHjNkKbUmgHtPxAxZSjXgktEd3gri0hOx5Epryy3+4WAh3FfmFljWhgMcOsB+Dtxk55CVP3GQTTFf5Ak1bTP6jc6RteMA+GS8J1Tly58Ab/y9zwf894SqZPnlPX4M7GL0lpPamQW0Lr5/yIzXt4ZWkvoFsW+aifnExvwAAAAASUVORK5CYII="></a>
						      			</span>
						   				 </p>';
						   			}
						      	}else{
						      		if($modeCo==0){
						      		 echo'<a href="./?action=bordereauRL"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABTElEQVRYhe2WS0oDQRCGv0h2IiYLgxoXmkMIPu7mAQQfy6y8iytNDPgA3xhH1BPo1nEx3aRsOzOBqUo280PD0AX9VVf9Pd1QqZKN6sAeMATegSNgflrwReAUSINxAyxMA34WgfvRtYQ3gPMceAp8ATUreK8AngLfFglI+DMwyEngRBveBPpu8Sdgzc3FknhxyapJ7vzRwWOxFEiAjiW8HcTlaZgp/BXY0ITLnj9E4PIomsNXc+BDYF0bfuEWvx8D921Rhy8BVxPCw9OgAr8W8JUgLtsSM6Qa/K4AHjNkKbUmgHtPxAxZSjXgktEd3gri0hOx5Epryy3+4WAh3FfmFljWhgMcOsB+Dtxk55CVP3GQTTFf5Ak1bTP6jc6RteMA+GS8J1Tly58Ab/y9zwf894SqZPnlPX4M7GL0lpPamQW0Lr5/yIzXt4ZWkvoFsW+aifnExvwAAAAASUVORK5CYII="></a>
						      			</span>
						   				 </p>';
						   			}else{
						   				echo'<a href="./?action=bordereauAD"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABTElEQVRYhe2WS0oDQRCGv0h2IiYLgxoXmkMIPu7mAQQfy6y8iytNDPgA3xhH1BPo1nEx3aRsOzOBqUo280PD0AX9VVf9Pd1QqZKN6sAeMATegSNgflrwReAUSINxAyxMA34WgfvRtYQ3gPMceAp8ATUreK8AngLfFglI+DMwyEngRBveBPpu8Sdgzc3FknhxyapJ7vzRwWOxFEiAjiW8HcTlaZgp/BXY0ITLnj9E4PIomsNXc+BDYF0bfuEWvx8D921Rhy8BVxPCw9OgAr8W8JUgLtsSM6Qa/K4AHjNkKbUmgHtPxAxZSjXgktEd3gri0hOx5Epryy3+4WAh3FfmFljWhgMcOsB+Dtxk55CVP3GQTTFf5Ak1bTP6jc6RteMA+GS8J1Tly58Ab/y9zwf894SqZPnlPX4M7GL0lpPamQW0Lr5/yIzXt4ZWkvoFsW+aifnExvwAAAAASUVORK5CYII="></a>
						      			</span>
						   				 </p>';
						   			}
						      	}
						      ?>
						  </footer>
						</div>
					</div>
			</div>
			<div class="column is-half"></div>
		</body>