<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('/template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/style.css') }}">
    <title>Under Armour</title>
</head>
<!-- NAVBAR -->
<body id="home">
<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top mt-0 ">

    <a href="index.html" class="navbar-brand">
        <img src="{{asset('/template/img/logo1.png')}}" width="auto" height="30" alt="">
        <h3 class="d-inline align-middle"></h3></a>  <!-- MAKE a IMG NEW IMG -->
    <button class="navbar-toggler" data-toggle='collapse' data-target="#navbarNav">
                  <span class="navbar-toggler-icon">

                  </span>
    </button>
    <div class="collapse navbar-collapse ml-auto" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item px-2">
                <a href="/underarmour/public" class="nav-link ">HOME</a>
            </li>
            <li class="nav-item px-2">
                <a href="/underarmour/public/men/products" class="nav-link active">MEN</a>
            </li>
            <li class="nav-item px-2">
                <a href="/underarmour/public/women/products" class="nav-link">WOMEN</a>
            </li>
            <li class="nav-item px-2">
                <a href="/underarmour/public/boys/products" class="nav-link">BOYS</a>
            </li>
            <li class="nav-item px-2">
                <a href="/underarmour/public/girls/products" class="nav-link">GIRLS</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="login.html" class="nav-link"><i class="fa fa-shopping-cart fa-lg"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- HEADER-->

<div class="img-wrapper">
    <img class="img-responsive" src="{{ asset('/template/img/bans.jpg') }}" width="100%">
    <br>
    <br>
    <div class="img-overlay d-none d-lg-block">
        <br>
        <br>
        <br>
        <h5 class="text-white">GRAVITY HOLDS YOU DOWN</h5>
        <br>
        <br>
        <br>
        <div>
            <br>
            <h5 class="text-white">LIFTS YOU UP</h5>
        </div>
    </div>
</div>


<!-- CONTENT -->

<section class="p-5 m-5">
    <div class="container">
        <div class="card-deck">
            <div class="card" id="card-1">
                <a href="{{ route('men.single', ['id' => $first_post->id]) }}">
                <img class="card-img-top rounded" src="{{ asset($first_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $first_post->name }}</h5>
                    <p class="card-text">€{{ $first_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
            <div class="card" id="card-2">
                <a href="{{ route('men.single', ['id' => $second_post->id]) }}">
                    <img class="card-img-top" src="{{ asset($second_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $second_post->name }}</h5>
                    <p class="card-text">€{{ $second_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
            <div class="card" id="card-3">
                <a href="{{ route('men.single', ['id' => $third_post->id]) }}">
                    <img class="card-img-top rounded" src="{{ asset($third_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $third_post->name }}</h5>
                    <p class="card-text">€{{ $third_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
        </div>
        <div class="card-deck pt-5 ">
            <div class="card" id="card-4">
                <a href="{{ route('men.single', ['id' => $forth_post->id]) }}">
                    <img class="card-img-top rounded" src="{{ asset($forth_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $forth_post->name }}</h5>
                    <p class="card-text">€{{ $forth_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
            <div class="card" id="card-5">
                <a href="{{ route('men.single', ['id' => $fifth_post->id]) }}">
                    <img class="card-img-top rounded" src="{{ asset($fifth_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $fifth_post->name }}</h5>
                    <p class="card-text">€{{ $fifth_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
            <div class="card" id="card-6">
                <a href="{{ route('men.single', ['id' => $sixth_post->id]) }}">
                    <img class="card-img-top rounded" src="{{ asset($sixth_post->image) }}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $sixth_post->name }}</h5>
                    <p class="card-text">€{{ $sixth_post->price }}</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-success">Purchase</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote -->
<section id="quote-section">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="py-5">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                            ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite></footer>
                    </blockquote>
                    <a href="#" class="btn btn-danger">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="main-footer" class="py-2 bg-light text-black">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 ml-auto">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-social-icon btn-facebook ">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <p>Copyright &copy; 2018</p>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- MODAl -->


<script src="{{ asset('/template/js/jquery.min.js') }}"></script>
<script src="{{ asset('/template/js/popper.min.js') }}"></script>
<script src="{{ asset('/template/js/bootstrap.min.js') }}"></script>
</body>
</html>