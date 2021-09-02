<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Hello, world!</title>
</head>
<body>
    <div class="content ">
        @if(isset($category) && isset($product))
            @if($category=="pudding")
                @if($product=="pannacota")
                    <img src="{{ url('img/1.jpg') }}"  alt="...">
                    <h2>Pannacota</h2>
                    <h5>Rp 25.000</h5>
                    <p>Panna cotta (Italian for "cooked cream") is an Italian dessert of sweetened cream thickened
                        with gelatin and molded. </p>
                @elseif($product=="pudding-fla")
                    <img src="{{ url('img/2.jpg') }}"  alt="...">
                    <h2>Pudding Fla</h2>
                    <h5>Rp 10.000</h5>
                    <p>Pudding dengan perpanduan fla vanilla yang lembut dan manis.</p>
                @elseif($product=="pudding-mix-buah")
                <img src="{{ url('img/3.jpg') }}"  alt="...">
                <h2>Pudding Mix Buah</h2>
                        <h5>Rp 12.000</h5>
                        <p>Pudding dengan topping berbagai buah pilihan terbaik untuk bingkisan atau sekedar untuk
                            dikonsumsi bersama teman-teman.</p>
                @endif
            @elseif($category=="roti")
                    @if($product=="roti-tawar")
                    <img src="{{ url('img/4.jpg') }}"  alt="...">
                    <h2>Roti Tawar</h2>
                    <h5>Rp 11.000</h5>
                    <p>Tawar nya roti setawar hidup loe. </p>
                @elseif($product=="roti-keju")
                    <img src="{{ url('img/5.jpg') }}"  alt="...">
                    <h2>Roti Keju</h2>
                    <h5>Rp 11.000</h5>
                    <p>Pudding dengan perpanduan fla vanilla yang lembut dan manis.</p>
                @elseif($product=="roti-coklat")
                <img src="{{ url('img/6.jpg') }}"  alt="...">
                <h2>Roti Coklat</h2>
                        <h5>Rp 11.000</h5>
                        <p>Semanis-manis nya coklat tetap ada kepahitan sepeti hidup loe.</p>
                @endif
            @endif
        @else
                        <p>Not found</p>
        @endif
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>