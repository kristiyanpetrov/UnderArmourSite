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
<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top mt-0 " #id="nav-bar">

    <a href="index.html" class="navbar-brand">
        <img src="{{asset('/template/img/logo1.png')}}" width="auto" height="30" alt="">
        <h3 class="d-inline align-middle"></h3></a>
    <button class="navbar-toggler" data-toggle='collapse' data-target="#navbarNav">
                  <span class="navbar-toggler-icon">

                  </span>
    </button>
    <div class="collapse navbar-collapse ml-auto" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item px-2">
                <a href="/underarmour/public" class="nav-link active">HOME</a>
            </li>
            <li class="nav-item px-2">
                <a href="/underarmour/public/men/products" class="nav-link">MEN</a>
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

<!-- HEADER -->

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



<!-- Seller point-->
<section id="about" class=" py-5 text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-danger pb-3">
                        Our Brand
                    </h1>
                    <p class="lead pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0">
                                <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fa fa-arrow-circle-down"></i> WHO MAKES OUR PRODUCTS
                                </div>
                            </h5>
                        </div>

                        <div id="collapse1" class="collapse">
                            <div class="card-body">
                                Many of the specialty fabrics used in our products are technically advanced textile products developed by third parties.
                                The fabric used to manufacture our products is sourced by our manufacturers from suppliers pre-approved by us.
                                Substantially all of our products are manufactured by unaffiliated manufacturers. In 2006, our products were primarily
                                manufactured in Asia, Central and South America and Mexico. All manufacturers are evaluated for quality systems, social
                                compliance and financial strength by our quality assurance team prior to being selected on an ongoing basis.
                                We strive to qualify multiple manufacturers where appropriate for particular product types and fabrications.
                                We also actively seek out vendors that can perform multiple manufacturing stages, such as procuring fabric and providing
                                finished products, helping us to reduce the cost of goods sold. We enter into a variety of agreements all of our manufacturers,
                                including non-disclosure and confidentiality agreements, and we require that all of our manufacturers adhere to a code of
                                conduct regarding quality of manufacturing and working conditions and other social concerns. We do not, however,
                                have any long-term agreements requiring us to utilize any manufacturer, and no manufacturer is required to produce our
                                products in the long term.
                                We also manufacture a limited number of products in our quick turn, Special Make-Up Shop, located at our distribution
                                facility in Glen Burnie, MD. This 17,000 square-foot shop is stocked with our fabric in multiple colors to help build
                                and ship products on tight deadlines for high-profile athletes, leagues, and teams. While the products manufactured in
                                the quick turn, Special Make-Up Shop represent an immaterial portion of our total net revenues, we believe the facility
                                helps us to provide superior service to select customers.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                                <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fa fa-arrow-circle-down"></i> THE UA STORY
                                </div>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse">
                            <div class="card-body">
                                1996 - 1998: IT ALL STARTED WITH AN IDEA
                                In 1996, Kevin Plank, a 23-year-old former University of Maryland special teams captain, turned an idea born on the
                                football field into a new industry that changed the way athletes dress forever. Back in his playing days,
                                Plank hated having to change his sweat-soaked cotton T-shirts over and over again during two-a-days.
                                Knowing that there simply had to be something better, he set out to create a solution.
                                Plank named his new company Under Armour, and after extensive research on the athletic benefits of synthetic fabrics,
                                he designed the first Under Armour HeatGear® T-shirt, which he named the #0037. Engineered with moisture-wicking performance fibers,
                                the shirt helps keep athletes cool, dry, and light in the most brutally hot conditions.
                                Working from his grandmother's basement in Washington DC's Georgetown neighborhood, he traveled up and down the East Coast selling his
                                revolutionary new product out of the trunk of his car. By the end of 1996, Plank made his first team sale,
                                and Under Armour generated $17,000 in sales.
                                In 1997, Under Armour introduced the now-famous ColdGear® fabric, which keeps athletes warm, dry, and light in cold conditions,
                                and then the AllSeasonGear® line, which keeps athletes comfortable between the extremes.
                                By the end of 1998, Under Armour outgrew grandma's basement and moved to an all-new headquarters and warehouse in Baltimore.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h5 class="mb-0">
                                <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fa fa-arrow-circle-down"></i> QUALITY
                                </div>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse">
                            <div class="card-body ">
                                At Under Armour, everything we do is engineered to make you better. Our products are the end result of our value chain,
                                which is comprised of two main segments: upstream (product ingredients, parts, and materials, from when they are built
                                in the factory until they are shipped to us) and downstream (from when our customer receives them to the products' end of life).
                                We have not yet made our defining product, but everything we do and make is designed to make athletes better. It's backed by
                                our Universal Guarantee of Performance (UGOP): built with exacting quality standards, built to perform and to last.
                                To protect our business, the people we affect, and our environment – This House – we must fulfill our Sustainability Vision.
                                We expect this vision to change: to be refined and refocused as we execute our plans and flex them to allow for novel ideas
                                and disruptive innovation. But here is how we see it now:
                                We have a materiality-focused sustainability strategy that was informed, in part, by conducting a Materiality analysis aligned
                                with the Global Reporting Initiative (GRI) G4 framework. We started this process in 2014 and used this analysis as part of how
                                we determine future strategic Sustainability priorities. In a sustainability context, we believe that material issues and risks
                                are the concerns we identified after considering the perspectives of both internal and external stakeholders.
                                We believe these issues are critically important to Under Armour.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TWO PICTURES -->

<section id="two-pictures" class="bg-light text-muted py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <img src="https://underarmour.scene7.com/is/image/Underarmour/SS18_TRAIN_KEY_ART_SITE_TAB_MB?wid=1067&fmt=jpg"
                     class="image" style="width:100%">
                <div class="middle">
                    <button class="btn btn-danger btn-lg">Shop Now</button>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="container">
                <img src="https://underarmour.scene7.com/is/image/Underarmour/180428_MOTHERS_DAY_TAB_MB?wid=1067&fmt=jpg"
                     class="image" style="width:100%">
                <div class="middle">
                    <button class="btn btn-danger btn-lg">Shop Now</button>
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
                        <a href="https://twitter.com/underarmour" class="btn btn-social-icon btn-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/UnderArmour/" class="btn btn-social-icon btn-facebook ">
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