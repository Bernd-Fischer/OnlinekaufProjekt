
<html>
<head>
    <title>Look at me Login</title>
</head>
<body>

    {!! Form::Open() !!}


        <h1>Hallo</h1>

        {!! form::label('name', 'Name:') !!}
        {!! form::text('name', null, ['class' => 'form-control']) !!}

    {!! Form::Close() !!}

</body>
</html>