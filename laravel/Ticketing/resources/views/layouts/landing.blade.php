<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        	Vivantix - @yield('title')
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

            .bod {
                padding-bottom: 1.5em;
            }

            .content {
                /*text-align: center;*/
                text-align: left;
            }

            .title {
                font-size: 72px;
            }

            .subtitle {
                font-size: 42px;
            }

            a {
                color: #636b6f;
                /*padding: 0 25px;*/
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
                background-color: pink;
                -webkit-transition: all ease 0.9s;
                -moz-transition: all ease 0.9s;
                transition: all ease 0.9s;
            }

            a.title {
                text-decoration: none;
                color: #636b6f;
            }

            .highlight {
                background-color: pink;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-right position-ref">
            @yield('body')
        </div>
    </body>
</html>
