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
                    INI MENU LIST ROTI 
                </div>   
                <div class="links">
                    <?php 
                        $namafoto = "puding.jpg";
                    ?>
                    <img src="{{ asset('img/'.$namafoto) }}" style="width: 100px;">
                    <hr>
                    <a href="{{ route('roti', ['jenis'=> 'coklat']) }}">
                        <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/3/20/2685735/2685735_6960030c-97a8-46d8-8891-fac6a06ed01f_935_935.jpg" style="width: 300px;" >
                    </a>
                    <a href="{{ route('roti', ['jenis'=> 'gandum']) }}">
                        <img src="https://s3.bukalapak.com/bukalapak-kontenz-production/content_attachments/56398/w-744/MAIN.jpg" style="width: 300px;" >
                    </a>
                    <a href="{{ route('roti', ['jenis'=> 'tawar']) }}">
                        <img src="https://cf.shopee.co.id/file/493b4106f661122448c2baa08d2348d1" style="width: 300px;" > 
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
