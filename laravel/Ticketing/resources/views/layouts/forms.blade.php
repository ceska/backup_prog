<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
          @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .flex-right {
                align-items: left;
                display: flex;
                justify-content: left;
                padding: 3em;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            
            .content {
                /*text-align: center;*/
                text-align: left;
            }

            input {
            	margin-bottom: 10px;
            	width: 300px;
            	border: none;
            	border-bottom: 1px solid #636b6f;
            	color: #636b6f;
            }

            .submit, button {
            	color: #636b6f;
                font-family: 'Nunito', sans-serif;
                background-color: pink;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                box-shadow: none;
                border: none;
            }

            .submit {
                padding: 2px 0;
            }

            button:hover {
                background-color: pink;
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <div class="flex-right position-ref full-height">
            @yield('body')
        </div>
    </body>
</html>
