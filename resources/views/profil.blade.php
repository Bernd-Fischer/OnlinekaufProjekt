
@extends('layouts.default')

@section('content')

  <div id="inhalt">
  	<div class="inhaltdatenkurz">
     Ihre Daten:
            <table border="0" cellspacing="2" cellpadding="2">
              <tbody>
                <tr>
                  <td align="right">Vorname:</td>
                </tr>
                <tr>
                  <td align="right">Nachname:</td>
                </tr>
                <tr>
                  <td align="right">E-Mail Adresse:</td>
                </tr>
                <tr>
                  <td align="right">Passwort(Max. 12 Zeichen):</td>
                </tr>
              </tbody>
            </table>

	<form action="loeschen" method="post">
		<button class="btn-danger" type="submit" value="loeschen" >Profil Löschen</button>
	</form>
	 
	</div>
  </div>

@endsection