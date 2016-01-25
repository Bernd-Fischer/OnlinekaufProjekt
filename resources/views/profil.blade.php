
<html lang="de">

<head>
  @include('.layouts.head')
</head>
<body>
<div id="seite">
  @include('.layouts.kopfbereich')
  @include('.layouts.steuerung')

  <div id="inhalt">
  	<div class="inhaltdatenkurz">
     Ihre Daten:
	  <form action="profil.htm" method="post" style="font-weight:bold">
            <table border="0" cellspacing="2" cellpadding="2">
              <tbody>
                <tr>
                  <td align="right">Anrede:</td>
                  <td>
                    <select name="geschl">
                      <option value="0">Bitte wählen</option>
                      <option value="m">Herr</option>
                      <option value="f">Frau</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="right">Vorname:</td>
                  <td>
                    <input maxlength="50" name="Vorname" size="30" type="text" required/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Nachname:</td>
                  <td>
                    <input maxlength="50" name="Nachname" size="30" type="text" required/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Strasse:</td>
                  <td>
                    <input maxlength="50" name="Strasse" size="30" type="text" required/>
                  </td>
                </tr>
                <tr>
                <td align="right">PLZ:</td>
                <td>
                  <input maxlength="5"  name="PLZ" size="7" maxlength="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required/>
                </td>
                </tr>
                <tr>
                  <td align="right">Ort:</td>
                  <td>
                    <input maxlength="50" name="Ort" size="30" type="text" required/>
                  </td>
                </tr>
                <tr>
                  <td align="right">E-Mail Adresse:</td>
                  <td>
                    <input type="email" name="email" size="30"  value="" required/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Passwort(Max. 12 Zeichen):</td>
                  <td>
                    <input maxlength="12" name="Email" size="30" type="password" required/>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" value="ändern" />
                  </td>
                </tr>
              </tbody>
            </table>
		</form>
	<form action="loeschen" method="post">
		<button type="submit" value="Submit" style="color:red;">Profil Löschen</button>	
	</form>
	 
	</div>
  </div>
  @include('.layouts.alert')
  <footer>
    @include('.layouts.footer')
  </footer>
</div>
</body>

</html>