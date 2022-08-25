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

                <div class="banner-price">
                    <div class="price-item">
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

    {{-- Comics Details --}}
    <section>
        <div class="container">
            <div class="comics-details-content">
                <div class="comics-details-text">
                    <h3>
                        Talent
                    </h3>
                    <div>
                        <div>
                            <div>
                                Art by:
                            </div>
                            <div>
                                @foreach ($current_comics['artists'] as $artist)
                                    <span class="color-blue">
                                        {{ $artist }}
                                    </span>
                                    @if(!$loop->last), @endif
                                @endforeach
                            </div>

                        </div>
                        <div>
                            <div>
                                Written by:
                            </div>
                            <div>
                                @foreach ($current_comics['writers'] as $writers)
                                    <span class="color-blue">
                                        {{ $writers }}
                                    </span>
                                    @if(!$loop->last), @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="comics-details-text">
                    <h3>
                        Specs
                    </h3>
                    
                    <div>
                        <div>
                            Series:
                        </div>
                        
                        <div class="color-blue">
                            {{ $current_comics['series'] }}
                        </div>
                    </div>
        
                    <div>
                        <div>
                            U.S. Price:
                        </div>
                        
                        <div>
                            {{ $current_comics['price'] }}
                        </div>
                    </div>
        
                    <div>
                        <div>
                            On Sale Date:
                        </div>
                        
                        <div>
                            {{ $current_comics['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    
@endsection