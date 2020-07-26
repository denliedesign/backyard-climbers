@extends('layouts.app')
@section('content')

    <div class="head-wrap">
        <div class="head"></div>
        <div id="head-content" class="text-center text-white">
            <h1>Climbers for Kids</h1>
            <a href="/best-kids-climbing-dome"><button class="btn btn-lg text-white">See The Top Dome Climbers</button></a>
        </div>
    </div>

    <section id="vision">
        <div class="container">
            <h1 class="text-center mt-5">Our Vision</h1>
            <p class="mb-5 pb-5 mx-5 px-5 text-center">To find a variety of fun, engaging, safe, non-toxic climbing toys for kids of all ages.
                <br><em>Backyard Climbers</em> does the research, so you don't have to!</p>
        </div>
    </section>

    <section id="home-lists" class="py-5">
        <div class="container">
            <h1 class="text-center text-white">Recent Lists</h1>
            <div class="row">
                <div class="col-sm list-item-wrap m-1">
                    <a href="/best-kid-foam-mats">
                        <p class="text-center bg-gold mb-1">9 months - 3 years old</p>
                        <div class="row">
                            <div class="col-sm d-flex align-items-center">
                                <img style="max-height: 200px;" src="/images/ecr4kids-foam-climber-kids-tunnel.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm list-item-text">
                                <div class="trophy d-none d-md-block"><ion-icon name="trophy"></ion-icon></div>
                                <h4 class="mb-0">Best Kid Foam Mats of Summer 2020</h4>
                                <p>Great for indoor climbing and play! There's a wide variety of options to pick from.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm list-item-wrap m-1">
                    <a href="/best-montessori-climber">
                        <p class="text-center bg-gold mb-1">6 months - 5 years old</p>
                        <div class="row">
                            <div class="col-sm d-flex align-items-center">
                                <img style="max-height: 200px;" src="/images/best-pikler.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm list-item-text">
                                <div class="trophy d-none d-md-block"><ion-icon name="trophy"></ion-icon></div>
                                <h4 class="mb-0">Best Montessori Climber of Summer 2020</h4>
                                <p>Find the best Montessori climbing toys with our list of top Pikler triangle sets.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm list-item-wrap m-1">
                    <a href="/best-kids-climbing-dome">
                        <p class="text-center bg-gold mb-1">3 - 10 years old</p>
                        <div class="row">
                            <div class="col-sm d-flex align-items-center">
                                <img style="max-height: 200px;" src="/images/zupapa-kids-climbing-dome.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm list-item-text">
                                <div class="trophy d-none d-md-block"><ion-icon name="trophy"></ion-icon></div>
                                <h4 class="mb-0">Best Kid's Climbing Dome of Summer 2020</h4>
                                <p>List includes both indoor and outdoor climbing domes! Big and stable or portable and light.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm list-item-wrap m-1">
                    <a href="/best-slide-and-swing-play-set">
                        <p class="text-center bg-gold mb-1">1 - 12 years old</p>
                        <div class="row">
                            <div class="col-sm d-flex align-items-center">
                                <img style="max-height: 200px;" src="/images/little-tikes-slide-swing-set.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm list-item-text">
                                <div class="trophy d-none d-md-block"><ion-icon name="trophy"></ion-icon></div>
                                <h4 class="mb-0">Best Slide & Swing Playset of Summer 2020</h4>
                                <p>Bring the park to your house with these beloved play sets. Even includes indoor swing and slide sets</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
