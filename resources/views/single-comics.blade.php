@extends('layouts.app')

@section('page_title')
    Single Comics    
@endsection

@section('main_content')
    <section class="banner-img">
        <div class="container">
            <img src="{{ $current_comics['thumb'] }}" alt="">            
        </div>
    </section>
    <section class="comics-content">
        <div class="container am-flex">
            <div class="comics-text">
                <h1>
                    {{ $current_comics['title'] }}
                </h1>

                <div class="banner-price am-flex">
                    <div class="price-item am-flex">
                        <div class="price">
                            <span class="text-style-price">U.S. Price:</span> {{ $current_comics['price'] }}
                        </div>
                        <div class="available">
                            <span class="text-style-price">AVAILABLE</span>
                        </div> 
                    </div>
                    <div class="check">
                        Check Availability

                    </div>
                </div>

                <div>
                    <p>
                        {{ $current_comics['description'] }}                        
                    </p>
                </div>
                
            </div>
            <div class="adv">
                <img src="../img/adv.jpg" alt="Advertisement">
            </div>
        </div>
    </section>
    
@endsection