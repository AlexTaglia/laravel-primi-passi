<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel primi passi</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-image: url({{ $url }});
            background-size: cover;
            color: #023047;
        }

        .full-height {
            height: 100vh;
        }

        .title {
            font-size: 84px;
            text-shadow: 2px 2px 5px #219ebc
        }

        .links > a {
            color: #1d3557;
            padding: 0 25px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
    </head>
    <body>
        <div class="container full-height">
            <header>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="about">About</a>
                    <a href="contacts">Contacts</a>
                </div>
            </header>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">
                        Hello World!
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
