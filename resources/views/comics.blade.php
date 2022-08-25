@extends('layouts.app')

@section('main_content')

    <section class="content-main">
        <div class="container">
            <h2 class="title-section">
                Current Series
            </h2>

            <div class="cards">
                @foreach ($comics_array as $comics_item)

                    <div class="single-card">
                        <!-- Image Card -->
                        <div class="img-card">
                            <img src="{{ $comics_item['thumb'] }}" alt="{{ $comics_item['series'] }}">
                        </div>
                        <!-- Title Series Card -->
                        <h2 class="series-card">
                            {{ $comics_item['series'] }}
                        </h2>
                    </div>  
                    
                @endforeach           

            </div>

        </div>
    </section>

    <section class="buy-list">
        <div class="container">
            <ul>
                <!-- Single Link -->
                <li>
                    <a href="#">
                        <!-- link Image -->
                        <div class="buy-img">
                            <img src="../img/buy-comics-digital-comics.png" alt="DIGITAL COMICS">
                        </div>
                        
                        <!-- link Info -->
                        <div class="text">
                            DIGITAL COMICS
                        </div>    
                    </a>
                </li>
                <!-- Single Link -->
                <li>
                    <a href="#">
                        <!-- link Image -->
                        <div class="buy-img">
                            <img src="../img/buy-comics-merchandise.png" alt="DC MERCHANDISE">
                        </div>
                        
                        <!-- link Info -->
                        <div class="text">
                            DC MERCHANDISE
                        </div>    
                    </a>
                </li>
                <!-- Single Link -->
                <li>
                    <a href="#">
                        <!-- link Image -->
                        <div class="buy-img">
                            <img src="../img/buy-comics-subscriptions.png" alt="SUBSCRIPTION">
                        </div>
                        
                        <!-- link Info -->
                        <div class="text">
                            SUBSCRIPTION
                        </div>    
                    </a>
                </li>
                <!-- Single Link -->
                <li>
                    <a href="#">
                        <!-- link Image -->
                        <div class="buy-img">
                            <img src="../img/buy-comics-shop-locator.png" alt="COMIC SHOP LOCATOR">
                        </div>
                        
                        <!-- link Info -->
                        <div class="text">
                            COMIC SHOP LOCATOR
                        </div>    
                    </a>
                </li>
                <!-- Single Link -->
                <li>
                    <a href="#">
                        <!-- link Image -->
                        <div class="buy-img">
                            <img src="../img/buy-dc-power-visa.svg" alt="DC POWER VISA">
                        </div>
                        
                        <!-- link Info -->
                        <div class="text">
                            DC POWER VISA
                        </div>    
                    </a>
                </li>
            </ul>
        </div>
    </section>
    
@endsection