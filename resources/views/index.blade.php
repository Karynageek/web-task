<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>BUCKWHEAT ORION</title>
        <link rel="shortcut icon" href="{{ URL::asset('assets/img/logo2.png') }}" type="image/png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Sintony:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

        <header id="header" class="header">
            <div class="main_header">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-4 col-lg-3">
                            <img src="{{ URL::asset('assets/img/logo2.png') }}" class="logo" alt="Luxury buckwheat">
                        </div>
                        <div class="col-6 col-md-4 col-lg-6 d-flex justify-content-between">                        
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav menu d-flex justify-content-between">
                                <li class="nav-item menu_item active">
                                    <a href="#header">
                                        MAIN
                                    </a>
                                </li>
                                <li class="nav-item menu_item">
                                    <a href="#about">
                                        ABOUT BUCKWHEAT
                                    </a>
                                </li>
                                <li class="nav-item menu_item">
                                    <a href="#special">
                                        PRICE
                                    </a>
                                </li>
                                <li class="nav-item menu_item">
                                    <a href="#footer">
                                        CONTACTS
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </nav>                      
                    </div>
                        <div class="col-3 col-md-4 col-lg-3">
                            <button href="#compare" class="menu_button1 cta d-flex justify-content-center float-right">
                            <span class="grn_icon"> </span>
                            COMPARE PRICES
                            </button>
                            <button href="#compare" class="menu_button2 cta d-flex justify-content-center float-right">
                            <span class="grn_icon"> </span>
                            </button>
                    </div>
                    </div>
                </div>	
            </div>

            <div class="offer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 float-right">
                            <div class="title">
                                <h1 class="title_heading">
                                    From <span>buckwheat</span> and millet<!--  <br> -->and porridge and paste
                                </h1>
                                <p class="title_desc">
                                    © Ukrainian proverb
                                </p>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </header>

        <section id="about" class="about">
            <div class="line_between"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="history">
                            <h2 class="history_title">
                                ABOUT BUCKWHEAT
                            </h2>
                            <p class="history_text">
                                Buckwheat is one of the few cereals that contains choline, a B-vitamin necessary for the nervous system to function. Some scientists believe that buckwheat even reduces the risk of cancer due to its high concentration of flavonoids. These substances inhibit the growth of cancer cells.
                            </p>
                            <div class="cta video_button">
                                Watch the video
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 d-flex justify-content-center">
                        <div class="food-images food-images-down">
                            <img src="{{ URL::asset('assets/img/food1.jpg') }}" alt="Pasta" class="food-images_item img-fluid">
                            <img src="{{ URL::asset('assets/img/food2.jpg') }}" alt="Chicken" class="food-images_item img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 d-flex justify-content-center">
                        <div class="food-images">
                            <img src="{{ URL::asset('assets/img/food3.jpg') }}" alt="Meat" class="food-images_item img-fluid">
                            <img src="{{ URL::asset('assets/img/food4.jpg') }}" alt="Fish" class="food-images_item img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="special" class="special">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="special-title">
                            PRICE
                        </h2>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="food">
                            <img src="{{ URL::asset('assets/img/novus2.jpg') }}" alt="shop1" class="food_img img-fluid">
                            <h3 class="food_title">
                                Novus
                            </h3>
                            <p class="food_desc novus">
                                «NOVUS. Trustworthy» 
                            </p>
                            <div class="food_details d-flex">
                                <div class="food_del">
                                    Contact <span>Сenter</span>
                                </div>
                                <div class="food_phone">
                                    0-800-601-729
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="food">
                            <img src="{{ URL::asset('assets/img/eco2.jpg') }}" alt="shop2" class="food_img img-fluid">
                            <h3 class="food_title">
                                Eco Market
                            </h3>
                            <p class="food_desc">
                                «Eco Market» is an economical supermarket! 
                            </p>
                            <div class="food_details d-flex">
                                <div class="food_del">
                                    Contact <span>Сenter</span>
                                </div>
                                <div class="food_phone">
                                    0-800-302-055
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="food">
                            <img src="{{ URL::asset('assets/img/metro2.jpg') }}" alt="shop3" class="food_img img-fluid">
                            <h3 class="food_title">
                                Metro
                            </h3>
                            <p class="food_desc">
                                «Our business is the success of our customers»
                            </p>
                            <div class="food_details d-flex">
                                <div class="food_del">
                                    Contact <span>Сenter</span>
                                </div>
                                <div class="food_phone">
                                    0-800-501-401
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-between align-items-center control-panel" id="compare">
                    <div class="align-items-center control-panel-shops col-12 col-md-3 col-lg-3">
                        <div class="control-panel-shops-checkbox">
                            <input type="checkbox" id="shop-novus" name="selected-novus" value="novus">
                            <label for="shop-novus">Novus</label>
                        </div>
                        <div class="control-panel-shops-checkbox">
                            <input type="checkbox" id="shop-eco" name="selected-eco" value="eco">
                            <label for="shop-eco">Eco market</label>
                        </div>
                        <div class="control-panel-shops-checkbox">
                            <input type="checkbox" id="shop-metro" name="selected-metro" value="metro">
                            <label for="shop-metro">Metro</label>
                        </div>
                    </div>
                    <div class="control-panel-search flex-grow-1 d-flex justify-content-center align-items-stretch col-12 col-md-9 col-lg-9">
                        <div class="row">
                            <input type="text" class=" col-12 control-panel-search__text flex-grow-1" placeholder="Name of product you want to compare price for">
                            <div class="cta col-12 control-panel-search__submit" data-url="{{route('compare-price')}}">Compare prices</div>
                        </div>
                    </div>
                <div class="row price-compare__results"></div>
            </div>
        </section>
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="socials d-flex justify-content-center">
                            <li class="socials_item socials_item_fb">
                                <a href="#"></a>
                            </li>
                            <li class="socials_item socials_item_tw">
                                <a href="#"></a>
                            </li>
                            <li class="socials_item socials_item_g">
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="credits">
                            Orion © 2021
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal2">
            <div class="modal2_overlay">
                <div class="modal2_body">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2lRDSJrSZP0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
    </body>
</html>

