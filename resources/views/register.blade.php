<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">


    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .nomtext{
            font-weight: bold;
            color: Black;
        }
        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Register</div>
        <form method="post" action={{route ('auth.postRegister') }}>
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            <div class="form-group">
                <label for="name">User name: </label>
                <input type="name" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirms">Password </label>
                <input type="password" class="form-control" id="password_confirms" name="password_confirms">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <div class="nomtext">
            Ja estas Registrat:
            <a id="login" href="{{ '/login'}}">login</a>
        </div>


    </div>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</div>
</body>
</html>
