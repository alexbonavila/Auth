<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
        <div class="title">Login</div>

        <form>
            <div class="form-group">
                <label for="email">Email addres: </label>
                <input type="email" class="form-control" id="email" name="email"></input>
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="email" name="password"></input>
            </div>
            <button type="submit" class="btn btn-default">Loguin</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>


    </div>
</div>
</body>
</html>
