@extends('layouts.app')
@section('title', 'Backyard Climbers | Best Kid Foam Mats')
@section('content')

    <div class="top-wrap">
        <div class="top"></div>
    </div>
    <div class="container">
        <h1 class="text-center mt-5">Best Kid's Foam Mats of Summer 2020</h1>
        <p class="text-center mb-0">These are the best floor mats for children. The list includes foam playsets and crawling toys.</p>
        <p class="text-muted text-center p-0 m-0"><small>July 18, 2020</small></p>
        <div class="table-responsive">
            <table class="table ratings-summary my-5 mt-0">
                <thead>
                <tr>
                    <th>Ranking</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Toxic-Free</th>
                    {{--                <th>Rating</th>--}}
                    <th>Price</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><img style="height: 100px;" src="/images/ecr4kids-foam-climber-kids-tunnel.jpg" alt="" class="img-fluid"></td>
                    <td>ECR4Kids SoftZone Single-Tunnel Foam Climber</td>
                    <td>GREENGUARD[GOLD], CertiPUR-US, no phthalates</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana-half.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$191.41</td>
                    <td><a href="https://amzn.to/32DtKed" target="_blank"><button class="btn text-white">Amazon</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img style="height: 100px;" src="/images/ecr4kids-crawling-tunnel.jpg" alt="" class="img-fluid">
                        <br>
                        <img style="height: 100px;" src="/images/ecr4kids-foam-climber-play-set.jpg" alt="" class="img-fluid">
                    </td>
                    <td>ECR4Kids SoftZone Tree Tunnel &<br>Tree Log Climber Play Set</td>
                    <td>GREENGUARD[GOLD], CertiPUR-US, no phthalates</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$169.99 +<br>$109.99</td>
                    <td>
                        <a href="https://amzn.to/39bvjBm" target="_blank"><button class="btn text-white">Amazon</button></a>
                        <br>
                        <a href="https://amzn.to/3fKT7hU" target="_blank"><button class="btn text-white mt-1">Amazon</button></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img style="height: 100px;" src="/images/butterfly-climber-kid-floor-mat.jpg" alt="" class="img-fluid"></td>
                    <td>Children’s Factory Butterfly Climber</td>
                    <td>GREENGUARD[GOLD]</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana-half.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$239.99</td>
                    <td><a href="https://amzn.to/2CKURcc" target="_blank"><button class="btn text-white">Amazon</button></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img style="height: 100px;" src="/images/rainbow-arch-climber-crawling-toy.jpg" alt="" class="img-fluid"></td>
                    <td>Children's Factory Rainbow Arch Climber</td>
                    <td>GREENGUARD[GOLD]</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana-half.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$761.40</td>
                    <td><a href="https://amzn.to/3heG8Fw" target="_blank"><button class="btn text-white">Amazon</button></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img style="height: 100px;" src="/images/ecr4kids-foam-blocks.jpg" alt="" class="img-fluid"></td>
                    <td>ECR4Kids SoftZone Foam Big Building Blocks</td>
                    <td>GREENGUARD[GOLD], CertiPUR-US, no phthalates</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana-half.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$69.99</td>
                    <td><a href="https://amzn.to/2CS9LNJ" target="_blank"><button class="btn text-white">Amazon</button></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img style="height: 100px;" src="/images/ecr4kids-climb-crawling-toy.jpg" alt="" class="img-fluid"></td>
                    <td>ECR4Kids SoftZone Climb and Crawl Activity Play Set</td>
                    <td>GREENGUARD[GOLD], CertiPUR-US, no phthalates</td>
                    {{--                <td class="nowrap">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana.png" alt="">--}}
                    {{--                    <img src="/images/banana-half.png" alt="">--}}
                    {{--                </td>--}}
                    <td>$116.03</td>
                    <td><a href="https://amzn.to/30vRka6" target="_blank"><button class="btn text-white">Amazon</button></a></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-green">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm">
                    <img src="/images/tunnel-climber-play-structure.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm">
                    <div class="number-one d-inline">1</div>
                    <h2 style="color: goldenrod;" class="d-inline">BEST OVERALL</h2>
                    <h2 class="text-white">ECR4Kids Single-Tunnel Foam Climber</h2>
                    <p class="text-white">
                        Single-Tunnel Foam Climber by ECR4Kids is my pick for best Foam Mat!
                        <br><br>There are so many variations of mats out there, but for me this play set offers the best bang for your buck! Pay a little less and you lose the tunnel for cylinders and rectangles, pay a little more for multiple tunnels and ramps. If goldilocks were choosing a foam mat set, she would say this one is just right!
                        <br><br>Not long after she could crawl, our daughters favorite thing to do was and still is to climb steps. This can be dangerous and requires close supervision, so in our search for mats we wanted to find steps that she could safely go up and down on. This set checks off that box!
                        <br><br>After browsing every brand that I could find, ECR4Kids stands out from the crowd as a company that prioritizes safety and using non-toxic materials. They are GREENGUARD[GOLD] and CertiPUR-US certified and use no phthalates in their foam mats. This is a big deal, especially when there are competing companies that don't take these extra safety measures!
                        <br><br>While there are fun butterfly, rainbow, and log mats out there that will inspire creativity in your child and jealousy in your friends, this single-tunnel foam climber is the best value and therefore our top pick!
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
