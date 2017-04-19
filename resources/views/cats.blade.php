<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cats for dinner</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
              type="text/css">

        <style>
            html, body {
                font-family: 'Raleway';
                font-size: 32px;
                background: #D8D4F2;
                color: #332E3C;
                text-transform: uppercase;
                text-align: center;
            }

            .container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .button {
                display: block;
                font: inherit;
                border: 0;
                background: #1B2021;
                color: #D8D4F2;
                position: absolute;
                padding: 15px;
                margin-top: 30px;
                cursor: pointer;
                left: 50%;
                transform: translateX(-50%);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Cats for Dinner</h1>
            <img src="{{ $dinner }}" alt="cats for dinner">
            <button onclick="location.reload();" class="button"><i class="fa fa-cutlery"></i> Nah. Mehr!</button>
        </div>
    </body>
</html>

