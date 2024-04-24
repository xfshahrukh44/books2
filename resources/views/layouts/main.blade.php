<!doctype html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            New Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
        ;
        })(window,document,'script','dataLayer','GTM-KCP4BFZK');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/inner.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">



    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset(!empty($favicon->img_path)?$favicon->img_path:'')}}">
    <title>{{ config('app.name') }} | @yield('title')</title>

    @yield('css')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTMKCP4BFZK"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="author-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="nav-top">
                        <img src="images/top_2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nicolas_name">
                        <h3>The Official Web Site of </h3>
                        <h2>NICOLAS SHUMWAY</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>

        <div class="container">
            <div class="col-lg-12">
                <div class="sec-header">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route('home')}}"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.featured')}}">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.books')}}">Books</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.articles')}}">
                                        Articles
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.videos')}}">
                                        Videos
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Photos
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="endl1">
                        <ul>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="#">Imprint</a></li>
                            <li><a href="{{route('front.blog')}}">Blog</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="endl1">
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Solutions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="endl2">
                        <p>Subscribe for Updates and News</p>
                        <form id="newForm">
                            <input type="text" id="newemail" class="form-control" placeholder="Your email">
                            <button class="btn btn-footer">Subscribe</button>
                        </form>
                    </div>
                    <div id="newsresult"></div>
                </div>

                <div class="col-lg-3">
                    <div class="endl3">
                        <p>Follow us on</p>
                        <div class="endl3-icon">
                            <a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1964)}}" class="extra"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(682)}}"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <div class="a-endl3">
                            <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218)}}">{{App\Http\Traits\HelperTrait::returnFlag(218)}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="endl4">
                        <p>Copyright © 2023, All right reserved</p>
                        <div class="last-flux">
                            <p></p>
                            <a href="#">Terms Of Services</a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lax@0.0.40/lax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="{{asset('js/custom.js')}}"></script>

    <script type="application/ld+json">
        {
         "@context": "https://schema.org",
         "@type": "ProfessionalService",
         "name": "Nicolas Shumway",
         "image": "https://nicolasshumway.com/wpcontent/themes/twentyseventeen/images/top_2.png",
         "@id": "",
        "url": "https://nicolasshumway.com/",
         "telephone": "5127967811",
         "address": {
         "@type": "PostalAddress",
         "streetAddress": "6100 Main St, Houston",
         "addressLocality": "Houston",
         "addressRegion": "TX",
         "postalCode": "77005",
         "addressCountry": "US"
         } ,
         "sameAs": [
         "https://www.facebook.com/nicolas.shumway.3/",
         "https://www.linkedin.com/in/nicolas-shumway-2670867a/",
         "https://twitter.com/nicolas_shumway"
         ]
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GHBM10NHQSW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-HBM10NHQSW');
    </script>

    @include('layouts.front.scripts')
    @yield('js')
</body>

</html>