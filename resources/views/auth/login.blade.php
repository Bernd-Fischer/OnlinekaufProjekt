@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 60px" >
        <div class="col-xs-6 col-md-2"></div>
        <div class="col-xs-6 col-md-8" id="logdiv">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner" role="listbox" style="height: 400px">
                    <div class="item active">
                        <img class="first-slide" src="pic/einkauf1.jpg" alt="First slide" style="height: 400px; width: 100%;">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Schnell und günstig einkaufen!!!</h1>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="second-slide" src="pic/einkauf2.jpg" alt="Second slide" style="height: 400px; width: 100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Eine Vielzahl an Auswahl!</h1>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="third-slide" src="pic/einkauf3.jpg" alt="Third slide" style="height: 400px; width: 100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Einfach und unkompliziert!!!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a href="/register">Registrieren</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
