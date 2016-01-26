
@extends('layouts.default')

@section('content')
            <div id="inhalt">

                <div class="row">
                    <div class="inhaltdatenlangflach">
                        Produkte Gekauft: X
                        Gesamt Ausgaben: X


                    </div>
                </div>


                <div class="row">
                    <div class="inhaltdatenlangflach">
                        <form action="uebersicht.html" method="post">
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
                </div>

                @foreach($gekauft as $gekauft)
                    <div id="row">
                        <div class="inhaltdatenlangflachh">
                            Datum:{{$gekauft->datum}} Kauf-id:{{$gekauft->id}} Menge:{{$gekauft->menge}} Gesamtbetrag: 0€
                        </div>
                    </div>
                @endforeach
                <p style="text-align:center; padding-top: 10px">
                    Lösche Zeile
                    <input id="inpIndex" maxlength="3" size="4" >
                    <button id="zeileLoesch" style="color:red" onClick="loeschZeile()">löschen</button>
                </p>
            </div>
@endsection