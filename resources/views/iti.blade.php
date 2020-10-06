@extends('layouts.layout')

@section('mainsection')
     <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 700px;">
                        <img src="http://images6.fanpop.com/image/photos/42900000/white-tiger-bing-42982792-1920-1200.jpg"
                            class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item" style="height: 700px;">
                        <img src="https://www.zoochat.com/community/media/flamingo-mom-and-chick.488184/full?d=1592493050"
                            class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item" style="height: 700px;">
                        <img src="http://cdn.wallpapersafari.com/55/0/VtnaU5.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item" style="height: 700px;">
                        <img src="http://images6.fanpop.com/image/photos/39600000/New-Picks-bing-39643260-1920-1200.jpg"
                            class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item" style="height: 700px;">
                        <img src="http://images6.fanpop.com/image/photos/42900000/Ruff-wading-bird-bing-42982001-1920-1200.jpg"
                            class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item" style="height: 700px;">
                        <img src="http://images6.fanpop.com/image/photos/42900000/meerkat-family-bing-42981971-1920-1200.jpg"
                            class="d-block w-100 h-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
@endsection