@extends('layouts.main')

@section('title', 'Contact')

@section('css')

<style>
    
    .about-inner {
        position: relative;
        z-index: 0;
        padding-top: 80px !important;
    }
    
</style>

@endsection


@section('content')

    <section class="second-sec about-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="three-img">
                        
                        <h1>Send us a message</span></h1>
                        
                        <div class="btn-flux">
                            <a class="btn btn-custom about" type="submit">Contact Us</a>
                        </div>
                        
                        
                        <!--<div class="buld-img">-->
                        <!--    <h2>Lorem Ipsum is simply dummy text of the printing and typesetting<span> industry. Lorem Ipsum-->
                        <!--                has been the industry's standard.</span> </h2>-->
                        <!--</div>-->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bginner ContactPage">
        <div class="container">
            <div class="row">
                
                
                <!--<div class="col-md-4 col-12 p-0">-->
                    <!--<div class="contact-info">-->
                        <!--<div class="conatct-heading">-->
                        <!--    <h1>Send us a message</span></h1>-->
                        <!--    <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>-->
                        <!--</div>-->
                        <!--<ul class="contact-socails-address">-->
                        <!--    <li>-->
                        <!--        <i class="fa-brands fa-facebook-f"></i>-->
                        <!--        <div class="contat-wrap">-->
                        <!--            <h6>Facebook</h6>-->
                        <!--            <p><a href="{{App\Http\Traits\HelperTrait::returnFlag(682)}}">VISIT PROFILE</a></p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <i class="fa-brands fa-instagram"></i>-->
                        <!--        <div class="contat-wrap">-->
                        <!--            <h6>Instagram</h6>-->
                        <!--            <p><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962)}}">VISIT PROFILE</a></p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <i class="fa-brands fa-twitter"></i>-->
                        <!--        <div class="contat-wrap">-->
                        <!--            <h6>Twitter</h6>-->
                        <!--            <p><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960)}}">VISIT PROFILE </a></p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</div>-->
                
                
                <div class="col-md-12 col-12">
                    <div class="COntactinfo">
                        <form class="form_submission" id="contactform" method="post">

                            @csrf

                            <input type="hidden" value="contact_form" name="form_name">


                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="innerForm">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" name="fname" required="" placeholder="First Name*">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="innerForm">

                                        <label for="exampleInputEmail1"> Phone Number</label>
                                        <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" required="" placeholder="Your Number*">
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="innerForm">

                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" required="" placeholder="Email*">

                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="innerForm">
                                        <label for="exampleInputEmail1">Messages</label>
                                        <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Type your message here..."></textarea>
                                    </div>
                                    <button href="#" class="btn btn-custom contact" type="submit">Send Message</button>
                                    <div id="contactformsresult">  </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
