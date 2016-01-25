<html lang="de">
    <head>
        @include('.layouts.head')
    </head>
    <body  onLoad="javascript:dynTabStart()" >
        <div id="seite">
            @include('.layouts.kopfbereich')
            @include('.layouts.steuerung')
            <div id="inhalt">
                <div class="inhaltdatenlangflach">
                    <p style="word-spacing:150px; text-align:center; font-size:20px;">
                        Einkäufe:X
                        Produkte:x
                        Ges.Ausgaben:x
                        etc
                    </p>
                </div>
                <div class="inhaltdatenlangflach" style="margin-bottom:10px;">
                    <form action="uebersicht.html" method="post" style="font-size:25px;
                    font-weight:bold;
                    text-align:center;">
                        Sortieren nach:	<select name="Auswahl">
                            <option value="0">Bitte wählen</option>
                            <option value="Kat">Kategorie</option>
                            <option value="Preis">Stückpreis</option>
                            <option value="Preis">Gesamtpreis</option>
                            <option value="Stand">Standort</option>
                            <option value="Name">Name</option>
                        </select>
                        <button type="submit" value="Submit" >sortieren</button>
                    </form>
                </div>
                <table id="tabellenebersicht">

                </table>
                <p style="text-align:center">
                    Lösche Zeile
                    <input id="inpIndex" maxlength="3" size="4" >
                    <button id="zeileLoesch" style="color:red" onClick="loeschZeile()">löschen</button>
                </p>
            </div>
            @include('.layouts.alert')
            <footer>
                @include('.layouts.footer')
            </footer>
        </div>
    </body>
</html>