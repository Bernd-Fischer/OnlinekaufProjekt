
var anzahleinkauf = 5;


function Einkauf(standort, kate, art, bild, datum, menge, stueck, preis, mwst, gpreis) {    
	this.standort = standort;
	this.kate = kate;
	this.art = art;
	this.bild = bild;
	this.datum = datum;
	this.menge = menge,
	this.stueck = stueck;
	this.preis = preis;
	this.mwst = mwst;
	this.gpreis = gpreis;              
}

var einkaufarray = [];

for (var x = 0; x < anzahleinkauf; x++){
	
	var einkauf = new Einkauf("Stutttgart", "Elektronik", "DVD", "pic/cd.jpg", "01.01.1990",
								"5", "x", "xxx", "xxx", x);
	einkaufarray.push(einkauf);

}

function 	dynTabStart() { 
    node = document.getElementById("tabellenebersicht");
    node.parentNode.insertBefore(createTable(einkaufarray.length, 11), node ); 
}

function createTable(row, col, id) {
    var myTable     = document.createElement("table"); 
	myTable.id = "tabellenebersicht";
	myTable.border = 1;
	
        var mytablebody = document.createElement("tbody");
		mytablebody.id = "tbodyid";
	
		
        for(var j = 0; j < row; j++) { 
            mycurrent_row = document.createElement("tr"); 
			mycurrent_row.id = "zeile" + j;
			for(var i = 0; i < col; i++) {				
				mycurrent_cell = document.createElement("td"); 
				
				switch (i) {				
					case 0:                   
					currenttext = document.createTextNode(einkaufarray[j].standort); 
					break;
		  
					case 1:               
					currenttext = document.createTextNode(einkaufarray[j].kate); 
					break;
					
					case 2:             
					currenttext = document.createTextNode(einkaufarray[j].art); 
					break;
			 				
					case 3: 
					mycurrent_cell = document.createElement("img");            
					mycurrent_cell.id = "tabbild";
					mycurrent_cell.src = einkaufarray[j].bild;
					
					
				
		
					case 4:             
					currenttext = document.createTextNode(einkaufarray[j].datum); 
					break;
					
					case 5:                
					currenttext = document.createTextNode(einkaufarray[j].menge); 
					break;
					
					case 6:             
					currenttext = document.createTextNode(einkaufarray[j].stueck); 
					break;
					   
					case 7:
					currenttext = document.createTextNode(einkaufarray[j].preis); 
					break;
					
					case 8:               
					currenttext = document.createTextNode(einkaufarray[j].mwst); 
					break;
					
					case 9:               
					currenttext = document.createTextNode(einkaufarray[j].gpreis); 
					break;
					
					case 10:					
					mycurrent_cell = document.createElement("button"); 
					mycurrent_cell.id = "btnLoe" + j;
					mycurrent_cell.onclick = function()
					{
						console.log(document.getElementById("tabbild").parentNode);
										
					};            
					currenttext = document.createTextNode("loeschen"); 
					mycurrent_cell.appendChild(currenttext); 
					
					break;			
				}				
			mycurrent_cell.appendChild(currenttext); 
            mycurrent_row.appendChild(mycurrent_cell);		
		}
            mytablebody.appendChild(mycurrent_row); 
    }
    myTable.appendChild(mytablebody); 
    return myTable; 
}

function loeschZeile() {
	if (document.getElementById("inpIndex").value <= anzahleinkauf) {	
		document.getElementById("tbodyid").deleteRow(document.getElementById("inpIndex").value - 1);
	}
}

function alerttimer() {
    var timer=90;
	document.onmousemove = (function() {	
    	console.log("maus bewegt");
    	timer = 90; 
      	}  );
      	setInterval(function(){
    
        timer--;
        console.log(timer)
       
        if(timer == 0) {
                document.location.href = "index.html";
        }
        if(timer > 30) {
                document.getElementById("alertdiv").style.visibility = "hidden";
                
        }  else {
            document.getElementById("alertdiv").style.visibility = "visible";
            document.getElementById("count").innerHTML = timer;
            
        }

        }, 1000);	
}

function checkmail(val) {

console.log("pruefe");



var result = true,
    text = val,
    regX;

if (text == '') {
   alert('Es wurde keine E-Mail-Adresse eingetragen.');
   result = false; }
   
else if (typeof(RegExp) == 'function') {
   regX = new RegExp('^([a-zA-Z0-9\\-\\.\\_]+)(\\@)([a-zA-Z0-9\\-\\.]+)(\\.)([a-zA-Z]{2,4})$');

   if (!regX.test(text)) {
      alert('Es wurde keine g\u00fcltige E-Mail-Adresse eingetragen.');
      result = false ;}

if (result) alert('Sie haben sich erfolgreich angemeldet');
return result;
}}


