<div class="row" >
    <div class="col-xs-6 col-md-1"></div>

    <div class="col-xs-6 col-md-10" id="kopfbereich" >
        <p><b><br>Willkommen bei MyShop</b></p>
    </div>

    <div class="col-xs-6 col-md-1"></div>
</div>

<div class="row">
    <div class="col-xs-6 col-md-1"></div>
    <div class="col-xs-6 col-md-10" id="regis" ></div>
    <div class="col-xs-6 col-md-1"></div>
</div>

<div class="row">
    <div class="col-xs-6 col-md-1"></div>
    <div class="col-xs-6 col-md-10" id="infoleiste" >
        Guten Tag {{ Auth::User()->vorname }} {{ Auth::User()->nachname }}, Guthaben: {{ Auth::User()->guthaben }}€
    </div>
    <div class="col-xs-6 col-md-1"></div>
</div>

