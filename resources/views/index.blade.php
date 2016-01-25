<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('.layouts.head')
</head>
<body id="logbody">

	<div class="welcomeframe">
        <h1>Herzliche Willkommen bei MyShop</h1>
        <p style="font-size:20px;">
            Wir bieten ihnen eine Vielzahl an Produkten 
        <br />
             für garantiert die gnstigsten Preise an verschiedene Standorte
        </p>    
    </div>
	<div id="logframe" >
		<div class="logsite" style="margin-left:10px;">
        <h1 style="	font-size:40px;
					font-weight:bold;
					text-align:center;">
         	Login
        </h1>
      
        <form action="/uebersicht" id="forme" onsubmit="return checkmail(document.getElementById('anmemail').value)" style="font-size:25px;
        		  font-weight:bold;
                  text-align:center;">
            <br /><br /><br />
            E-Mail:
            <input value="" size="" id="anmemail">
           		 <br />
            	Passwort:
            <input type="password" name="" value="" size="17" maxlength="12">
           		 <br />
          		 <p style="text-align:center;">
            	 	 <button type="submit" value="Submit" >Login</button>
           		 </p>
		</form>
        
      
      </div>
        <div class="logsite" style="border-left:grey 1px solid; padding-left:10px">
      	  <h1 style="	font-size:40px;
						font-weight:bold;
						text-align:center;">
        	  Registrieren</h1>
          <form action="/uebersicht" onsubmit="return checkmail(document.getElementById('regismail').value)" style="font-weight:bold">
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
                    <input maxlength="50" name="Vorname" size="30" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Nachname:</td>
                  <td>
                    <input maxlength="50" name="Nachname" size="30" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Strasse:</td>
                  <td>
                    <input maxlength="50" name="Strasse" size="30" type="text"/>
                  </td>
                </tr>
                <tr>
                <td align="right">PLZ:</td>
                <td>
                  <input maxlength="5" name="PLZ" size="7" maxlength="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                </td>
                </tr>
                <tr>
                  <td align="right">Ort:</td>
                  <td>
                    <input maxlength="50" name="Ort" size="30" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td align="right">E-Mail Adresse:</td>
                  <td>
                    <input  name="email" id="regismail" size="30"  value=""/>
                  </td>
                </tr>
                <tr>
                  <td align="right">Passwort(Max. 12 Zeichen):</td>
                  <td>
                    <input maxlength="12" name="Email" size="30" type="password"/>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" value="Registrieren" />
                  </td>
                </tr>
              </tbody>
            </table>
		</form>
          
      </div>		
   </div>

</body>
</html>
