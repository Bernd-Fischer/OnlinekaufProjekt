
<html >
<head>



    @include('.layouts.head')


</head>
<body>
@include('.layouts.kopfbereich')



<div class="row">
    <div class="col-xs-6 col-md-1"></div>
        <div class="col-xs-6 col-md-10">
            <div class="row">
                <div class="col-md-2">
                    @include('.layouts.steuerung')
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        <div class="col-xs-6 col-md-1"></div>
    </div>
</div>




@include('.layouts.alert')
<footer>
    @include('.layouts.footer')
</footer>

</body>
</html>
