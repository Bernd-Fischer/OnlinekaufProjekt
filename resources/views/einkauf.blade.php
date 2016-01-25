
<html lang="de">

<head>
    @include('.layouts.head')
</head>
<body onLoad="javascript:alerttimer()">
<div id="seite">
    @include('.layouts.kopfbereich')
    @include('.layouts.steuerung')
  </div>

  <div id="inhalt">
  	<div class="inhaltdatenlangflach">
    <p>
        <form action="suche" method="post">
        Produkt:
        <select name="kategorie">
                      <option value="0">Kategorie</option>
                      <option value="sport">Sport</option>
                      <option value="elek">Elektronik</option>
                    </select>
        <input maxlength="50" name="suche" size="30" type="text"/>
		<button type="submit" value="Submit" >suchen</button>	
		</form>
    </p> 
    </div>  
    <div class="suchliste">
    	<div class="suchobjektleiste">
        	<p>Fußball</p>
        	<img src="pic/fußball.jpg" id="tabbild"/>
            <p>Ein Fußball mit bester Qualität!</p>
            <P>15€</p>
            <form action="suche" method="post">
            menge:
            <input maxlength="3" name="suche" size="2" type="text"/>
            </br></br>
            <button type="submit" value="Submit" style="color:green">Einpacken</button>           
            </form>        
    	</div>
        <div class="suchobjektleiste">
       		<p>DVD</p>
        	<img src="pic/cd.jpg" id="tabbild"/>
            <p>1RS DVD 12er Pack</p>
            <P>15€</p>
            <form action="suche" method="post">
            menge:
            <input maxlength="3" name="suche" size="2" type="text"/>
            </br></br>
            <button type="submit" value="Submit" style="color:green">Einpacken</button>           
            </form>  
    	</div>
    </div>
  	<div class="gesamtframe">
    	<h1>Warenkorb</h1>
        <p>Artikel:X </br> 	Gesamt: XXX
        </br>
        <form action="kaufen" method="post">
		<button type="submit" value="Submit" style="color:green;font-size:25px; margin-left:20px;">kaufen</button>	
	</form>
        </p>
    </div>
  <div id="alertdiv">
  <h1>Sie waren 60 Sekunden inaktiv!</h1>
  <h2>Bewegen sie in den nächsten 30 Sekunden die Maus oder sie werden abgemeldet</h2>
  <h1 id="count">init</h1>
  </div>	  
  </div>
    @include('.layouts.alert')
  <footer>
      @include('.layouts.footer')
</footer>
</div>
</body>

</html>