@extends('layouts.default')

@section('content')
<?php
    $counter = 0;
    $menge = 0;
    $gesamt = 0;
?>
  <div id="inhalt" class="row">
      <div class="col-xs-6 col-md-10" >
          <div class="row">
              <!-- @foreach($ware as $ware) -->
                 <div class="col-xs-6 col-md-3" style="padding: 10px; text-align: center;" >
                     <div class="a" style="border-radius: 10px; border: solid; border-width: 1px; padding: 5px">
                         <img src="{{$ware->bild}}" width="150" height="150">
                         <div class="caption">
                             <h3 style="padding-top: 2px">{{$ware->name}}</h3>
                             <p>
                                 {{$ware->beschreibung}}
                             </p>
                             <p>
                                 {{$ware->preis}}€
                             </p>
                         </div>
                         <p>Menge</p>
                         <div class="form-group" class="mengenanzahl">

                            <input class="aanzahl" id="aaanzahl" type="number" min="0" max="99" maxlength="5" placeholder="0" style="width: 40px; text-align: center">
                            <button class="btn btn-primary" type="button" onclick="inkorb();" >in Warenkorb!</button>
                         </div>
                     </div>

                 </div>

              <!-- @endforeach    -->


          </div>
      </div>

      <div class="col-xs-6 col-md-2">
          <div class="gesamtframe">
              <h1>Warenkorb</h1>
              <p>Artikel: <span id="artikelmenge">0</span></p>
              <p>Gesamt: <span id="gesamtbetrag"> </span>€</p>
                  </br>
              <form action="kaufen" method="post">
                  <button type="submit" value="Submit" style="color:green;font-size:25px; margin-left:20px;">kaufen</button>
              </form>


          </div>
          <div id="alertdiv">
              <h1>Sie waren 60 Sekunden inaktiv!</h1>
              <h2>Bewegen sie in den nächsten 30 Sekunden die Maus oder sie werden abgemeldet</h2>
              <h1 id="count">init</h1>
          </div>
      </div>
      </div>


  </div>


<!-- Problem -->
<script>
    function inkorb(id) {
        //console.log("klick");
        //var x = document.getElementById("aaanzahl").value;
        //console.log(x);


       // console.log(document.getElementById("artikelmenge").innerHTML + 1);


        //document.getElementById("artikelmenge").innerHTML = $menge;
       // console.log($menge);









    }
</script>

@endsection