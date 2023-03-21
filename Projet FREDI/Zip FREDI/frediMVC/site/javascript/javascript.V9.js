
function addLine(){
	var tableau=document.getElementById("tab");

	var nbr=tableau.rows.length;
	//alert(nbr);

	var tr=document.createElement('tr');

	var td1=document.createElement('td');
	var td2=document.createElement('td');
	var td3=document.createElement('td');
	var td4=document.createElement('td');
	var td5=document.createElement('td');
	var td6=document.createElement('td');
	var td7=document.createElement('td');
	var td8=document.createElement('td');
	var td9=document.createElement('td');
	var td10=document.createElement('td');

	var input1=document.createElement('input');
	var input3=document.createElement('input');
	var input4=document.createElement('input');
	var input5=document.createElement('input');
	var input6=document.createElement('input');
	var input7=document.createElement('input');
	var input8=document.createElement('input');
	var input9=document.createElement('input');

	var select=document.createElement('select');
	var option1=document.createElement('option');
	var option2=document.createElement('option');
	var option3=document.createElement('option');
	var option4=document.createElement('option');
	var option5=document.createElement('option');

	var optionText1=document.createTextNode("Réunion");
	var optionText2=document.createTextNode("Compétition régionale");
	var optionText3=document.createTextNode("Compétition nationale");
	var optionText4=document.createTextNode("Compétition internationnale");
	var optionText5=document.createTextNode("Stage");


	var a=document.createElement("a")
	var img=document.createElement("img");

	var nameD="date"+nbr;
	var nameM="motif"+nbr;
	var nameT="trajet"+nbr;
	var nameKm="kmParcourus"+nbr;
	var nameC="coutT"+nbr;
	var nameP="peages"+nbr;
	var nameR="repas"+nbr;
	var nameH="hbgm"+nbr;
	var nameTo="total"+nbr;

	var idKm="kmParcourus"+nbr;
	var idC="coutT"+nbr;
	var idP="peages"+nbr;
	var idR="repas"+nbr;
	var idH="hbgm"+nbr;
	var idTo="total"+nbr;

	var nameOption1="motif"+nbr+"option1";
	var nameOption2="motif"+nbr+"option2";
	var nameOption3="motif"+nbr+"option3";
	var nameOption4="motif"+nbr+"option4";
	var nameOption5="motif"+nbr+"option5";


	//var idName="row"+nbr;

	//tr.setAttribute("id",idName);

	input1.setAttribute("name",nameD);
	input1.setAttribute("id",nameD);
	input1.setAttribute("type","date");

	input3.setAttribute("name",nameT);
	input3.setAttribute("id",nameT);

	input4.setAttribute("name",nameKm);
	input4.setAttribute("id",nameKm);
	input4.setAttribute("type","number");

	input5.setAttribute("name",nameC);
	input5.setAttribute("id",nameC);
	input5.setAttribute("type","number");

	input6.setAttribute("name",nameP);
	input6.setAttribute("id",nameP);
	input6.setAttribute("type","number");

	input7.setAttribute("name",nameR);
	input7.setAttribute("id",nameR);
	input7.setAttribute("type","number");

	input8.setAttribute("name",nameH);
	input8.setAttribute("id",nameH);
	input8.setAttribute("type","number");

	input9.setAttribute("name",nameTo);
	input9.setAttribute("id",nameTo);
	input9.setAttribute("type","number");

	select.setAttribute("name",nameM);

	option1.setAttribute("value","1");
	option2.setAttribute("value","2");
	option3.setAttribute("value","3");
	option4.setAttribute("value","4");
	option5.setAttribute("value","5");

	option1.setAttribute("id",nameOption1);
	option2.setAttribute("id",nameOption2);
	option3.setAttribute("id",nameOption3);
	option4.setAttribute("id",nameOption4);
	option5.setAttribute("id",nameOption5);

	var value="suppFrais(this)";
	a.setAttribute("onClick",value);
	img.setAttribute("src","data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAASklEQVR4nGNgGCmggYGB4T8a7iDXsP8U4oG3gIFUxQykq6e/Bf9J5I9awDAaRAyjqWgEBhEhMPgseEJGPfCEFAv8SLTkCVTPMAQA9hCmk99l5FAAAAAASUVORK5CYII=");


	var ligne=tableau.appendChild(tr);

	var colonne1=ligne.appendChild(td1);
	colonne1.appendChild(input1);

	var colonne2=ligne.appendChild(td2);
	colonne2.appendChild(select).appendChild(option1);
	option1.appendChild(optionText1);
	colonne2.appendChild(select).appendChild(option2);
	option2.appendChild(optionText2);
	colonne2.appendChild(select).appendChild(option3);
	option3.appendChild(optionText3);
	colonne2.appendChild(select).appendChild(option4);
	option4.appendChild(optionText4);
	colonne2.appendChild(select).appendChild(option5);
	option5.appendChild(optionText5);

	var colonne3=ligne.appendChild(td3);
	colonne3.appendChild(input3);

	var colonne4=ligne.appendChild(td4);
	colonne4.appendChild(input4);

	var colonne5=ligne.appendChild(td5);
	colonne5.appendChild(input5);

	var colonne6=ligne.appendChild(td6);
	colonne6.appendChild(input6);

	var colonne7=ligne.appendChild(td7);
	colonne7.appendChild(input7);

	var colonne8=ligne.appendChild(td8);
	colonne8.appendChild(input8);
	
	var colonne9=ligne.appendChild(td9);
	colonne9.appendChild(input9);

	var colonne10=ligne.appendChild(td10);
	colonne10.appendChild(a).appendChild(img);
}

function addAdhrt(){

	var tableau=document.getElementById("tabAdhrt");

	var nbr=tableau.rows.length;

	var tr=document.createElement('tr');

	var td1=document.createElement('td');
	var td2=document.createElement('td');
	var td3=document.createElement('td');
	var td4=document.createElement('td');
	var td5=document.createElement('td');
	
	var input1=document.createElement('input');
	var input2=document.createElement('input');
	var input3=document.createElement('input');
	var input4=document.createElement('input');

	var a=document.createElement("a")
	var img=document.createElement("img");
	
	var nomA="nomAdhrt"+nbr;
	var prenomA="prenomAdhrt"+nbr;
	var	numLicence="licenceAdhrt"+nbr;
	var	numLigue="ligue"+nbr;

	input1.setAttribute("name",nomA);
	input2.setAttribute("name",prenomA);
	input3.setAttribute("name",numLicence);
	input4.setAttribute("name",numLigue);

	input1.setAttribute("id",nomA);
	input2.setAttribute("id",prenomA);
	input3.setAttribute("id",numLicence);
	input4.setAttribute("id",numLigue);
	
	var value="suppAdhrt(this)";
	a.setAttribute("onClick",value);
	img.setAttribute("src","data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAASklEQVR4nGNgGCmggYGB4T8a7iDXsP8U4oG3gIFUxQykq6e/Bf9J5I9awDAaRAyjqWgEBhEhMPgseEJGPfCEFAv8SLTkCVTPMAQA9hCmk99l5FAAAAAASUVORK5CYII=");
	
	var ligne=tableau.appendChild(tr);

	var colonne1=ligne.appendChild(td1);
	colonne1.appendChild(input1);

	var colonne2=ligne.appendChild(td2);
	colonne2.appendChild(input2);

	var colonne3=ligne.appendChild(td3);
	colonne3.appendChild(input3);

	var colonne4=ligne.appendChild(td4);
	colonne4.appendChild(input4);

	var colonne5=ligne.appendChild(td5);
	colonne5.appendChild(a).appendChild(img);
}

    function count(){
    	var tableau1=document.getElementById("tab");
    	var nbr1=tableau1.rows.length-1;
    	document.cookie='count1='+nbr1+';path=/';

    	var tableau2=document.getElementById("tabAdhrt");
	    var nbr2=tableau2.rows.length-1;
	    document.cookie='count2='+nbr2+';path=/';

		
		var form=document.getElementById("formBordereau");
		alert("Votre bordereau a été soumis vous allez être redirigé vers la page d'accueil");
	    form.submit();
    }

    function suppFrais(r){
  		var i = r.parentNode.parentNode.rowIndex;
  		document.getElementById("tab").deleteRow(i);

    }

     function suppAdhrt(r){
  		var i = r.parentNode.parentNode.rowIndex;
  		document.getElementById("tabAdhrt").deleteRow(i);

    }

    function selectedValue(id,i){
    		var name=("motif"+id+"option"+i);
    		var option=document.getElementById(name);
    		option.setAttribute("selected","selected");
    }

    function addNumberOfLine(i){
    	for(var j=0;j<i-1;j++){
    		addLine();
    	}
    }

    function addNumberOfLineAD(i){
    	for(var j=0;j<i-1;j++){
    		addAdhrt();
    	}
    }

    function setValue(j,valueD,valueT,valueC,valueKm,valueP,valueR,valueH){

    		var nameD="date"+j;
			var nameT="trajet"+j;
			var nameKm="kmParcourus"+j;
			var nameC="coutT"+j;
			var nameP="peages"+j;
			var nameR="repas"+j;
			var nameH="hbgm"+j;
			var nameTo="total"+j;

	    	var date=document.getElementById(nameD);
	    	var trajet=document.getElementById(nameT);
	    	var km=document.getElementById(nameKm);
	    	var coutT=document.getElementById(nameC);
	    	var peages=document.getElementById(nameP);
	    	var repas=document.getElementById(nameR);
	    	var hebergement=document.getElementById(nameH);
	    	//var total=document.getElementById(nameTo);

	    	
	    	date.setAttribute("value",valueD);
	    	trajet.setAttribute("value",valueT);
	    	coutT.setAttribute("value",valueC);
	    	km.setAttribute("value",valueKm);
	    	peages.setAttribute("value",valueP);
	    	repas.setAttribute("value",valueR);
	    	hebergement.setAttribute("value",valueH);
    }

    function setValueAD(j,valueN,valueP,valueLicence,valueLigue){

    		var nameN="nomAdhrt"+j;
			var nameP="prenomAdhrt"+j;
			var nameLicence="licenceAdhrt"+j;
			var nameLigue="ligue"+j;

	    	var nomA=document.getElementById(nameN);
	    	var prenomA=document.getElementById(nameP);
	    	var licenceA=document.getElementById(nameLicence);
	    	var ligue=document.getElementById(nameLigue);

	    	nomA.setAttribute("value",valueN);
	    	prenomA.setAttribute("value",valueP);
	    	licenceA.setAttribute("value",valueLicence);
	    	ligue.setAttribute("value",valueLigue);    	
    }

    function verifMail(){
    var mailorg = document.getElementById("mailorg").value;
    var mailconf = document.getElementById("mailconf").value;
    if(mailorg == mailconf && mailorg != ""){
        return true;
    }else{
        return false;
    }
}

function verifmdp(){
    var mdporg = document.getElementById("mdporg").value;
    var mdpconf = document.getElementById("mdpconf").value;
    if(mdporg == mdpconf && mdporg != ""){
        return true;
    }else{
        return false;
    }
}

function verif(){
    var el = document.getElementById("sub");
    if(verifMail() && verifmdp()) {
        el.disabled = false;
    }else{
        el.disabled = true;
    }
}

function alerteMdp(){
    alert("Un message a bien été envoyé à votre adresse mail");
}

function incriptionModeControl(){
    var el = document.getElementById("InputLicence");
    var el2 = document.getElementById("InputLigue");
    if(el.style.display == 'none'){
        el.style.display = 'block';
        el.require = true;
        el2.style.display = 'block';
        el2.require = true;
    }else{
        el.style.display = 'none';
        el.require = false;
        el2.style.display = 'none';
        el2.require = false;
    }
}

function validation() { 
    var mdp1 = document.getElementById("mdp1");
    var mdp2 = document.getElementById("mdp2");
    if (mdp2!=mdp1){
        alert("Mot de passe et Mot de confirmation différents")
    }
} 

function alerteMdp(){
    alert("Un message a bien été envoyé à votre adresse mail");
}


