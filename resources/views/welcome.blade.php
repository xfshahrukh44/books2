@extends('layouts.main')

@section('title', 'Author, Historian, and Professor')
@section('description', 'Nicolas Shumway is an award-winning author, historian, and professor of Latin American studies. Learn more about his books, research, and teaching.')

@section('css')

@endsection


@section('content')

    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="now-noval">
                        {!! $page->sections[0]->value ?? '' !!}
{{--                        <h2>Available Now!</h2>--}}
{{--                        <p>--}}
{{--                            A coming-out and coming-of-age story, The Education of Joshua Chastain is the fictionalized memoir of a Mormon gay boy who grows up in a small LDS settlement in northern Arizona, a kind of Mormon shtetl. Centered mostly on Josh’s teenage years in the late 1960s and early 1970s, the novel tells how Josh discovers his sexuality, has several sexual affairs as a teenager (including one with a Roman Catholic priest), and endures <span id="dots">...</span><span id="more">verbal and occasional physical abuse from both high school teachers and classmates. When a sexual bully outs Josh in his junior year, his parents send him to a clinic in Phoenix run by a Mormon psychologist who specializes in “curing” homosexuals. Frightened by the clinic’s aversion therapy techniques, Josh flees to Los Angeles where he lives briefly with an abusive lover and is later forced to support himself as a prostitute. Permeating the narration is Josh’s struggle with the homophobia of his Mormon upbringing, a process that eventually leads to his excommunication. Musically and academically gifted, he eventually finds deliverance in higher education and in more accepting religious communities. Throughout his journey, he meets many fascinating characters including kind, supportive people as well as wannabe rapists.</span></p>--}}
                        <div class="read-btn">
{{--                            <a href="#" class="btn btn-custom" onclick="myFunction()" id="myBtn">Read More</a>--}}
                            <a href="{{route('front.bio')}}" class="btn btn-custom" id="myBtn">Read More</a>
                            <a href="{{route('front.bio')}}" class="btn btn-custom">Interview with the Author</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="noval-img">
                        <figure>
                            <img src="{{asset($page->sections[1]->value ?? 'images/book4.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="sec4-main-img">
                        <figure>
                            <img src="{{asset('images/BRAND-IMG.png')}}" class="img-fluid" alt="logo">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section3" id="about-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-img">
                        <div class="sec3-img-man">
                            <figure>
                                <img src="{{asset($page->sections[3]->value ?? 'images/man-2.png')}}" class="img-fluid" alt="Nicolas Shumway"> 
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-text">
                        {!! $page->sections[2]->value !!}
{{--                        <h1 class="lax lax_preset_fadeIn:50:100 lax_preset_spin">More About<span>Author</span></h1>--}}
{{--                        <p>Born in a Presbyterian mission hospital on the Navajo Reservation, Nicolas Shumway was raised in--}}
{{--                            St. Johns, Arizona, a small farming and ranching community in the northeastern corner of the--}}
{{--                            state. His father owned a garage and tire shop, and his mother taught grade-school music. His--}}
{{--                            first name—Nicolas without an “h”—follows the French spelling which his mother got from a--}}
{{--                            popular violin method book written by a Frenchman, Nicolas Laoureux.</p>--}}

                        <a href="{{route('front.bio')}}" class="btn btn-custom sec3">More about the author</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec6-text-flux">
                        <div class="text-h1-sec-6">
                            <h1>POPULAR BOOKS</h1>
                        </div>

                        <div class="text-a-sec-6">
                            <a href="{{route('front.books')}}">
                                <p>Explore more</p><i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @foreach($popular_books as $popular_book)
                    <div class="col-lg-3" data-aos="fade-up">
                        <div class="sec6-opt">
                            <div class="sec6-opt-img">
                                <figure>
                                    <img src="{{asset($popular_book->image ?? 'images/book5.png')}}" class="img-fluid" alt="{{$popular_book->alt_tag}}">
                                </figure>
                            </div>
                            <!-- <div class="sec6-opt-text">
                                <h6>First Stone</h6>
                                <div class="small-p-flux">
                                    <div class="p-smallflux-main">
                                        <p>Dennis Hodgdon</p>
                                    </div>
                                    <div class="i-smallflux-main">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.8</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="section7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec7-text">
                        <h1>New Audiobook</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec7-text">
                        <h1 class="comming">Comming <span class="d-block">Soon<span></h1>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec7-img-book">
                        <figure>
                            <img src="{{asset('images/old-person.webp')}}" class="img-fluid" alt="Boy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
