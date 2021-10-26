<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Bakery Shop</title>

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

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Puding {{ $jenis }}
                </div> 
                <br>
                @if($jenis == 'fla')
                <img src="https://sukasukaamel.com/wp-content/uploads/2017/11/IMG_3078_wm-2.jpg" style="width: 300px;" >
                <div class="links">
                    Nama = Puding Fla Enak<br>
                    Harga - Rp15.000
                </div>
                @elseif ($jenis == 'buah')
                <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/10/22/4439432/4439432_1d1abe84-19f8-481d-b579-e1b1308dbfb5_720_720.jpg" style="width: 300px;" >
                <div class="links">
                    Nama = Puding Buah Campur <br>
                    Harga - Rp10.000
                </div>
                @else 
                <div class="links">
                    Roti yang Anda cari tidak ada
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
