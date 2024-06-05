@extends('layouts.main')

@section('title', 'Author, Historian, and Professor')
@section('description', 'Nicolas Shumway is an award-winning author, historian, and professor of Latin American studies. Learn more about his books, research, and teaching.')

@section('css')

<style>
    
    
#audio-control {
  cursor:pointer;
  padding: 10px 20px;
  background:#4d0000;
  color: #fff;
  border-radius: 4px;
  display: inline-block;
}
    
</style>

@endsection


@section('content')

    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="now-noval">
                        {!! $page->sections[0]->value ?? '' !!}
                        {{--<h2>Available Now!</h2>--}}
                        {{--<p>--}}
                        {{-- A coming-out and coming-of-age story, The Education of Joshua Chastain is the fictionalized memoir of a Mormon gay boy who grows up in a small LDS settlement in northern Arizona, a kind of Mormon shtetl. Centered mostly on Josh’s teenage years in the late 1960s and early 1970s, the novel tells how Josh discovers his sexuality, has several sexual affairs as a teenager (including one with a Roman Catholic priest), and endures <span id="dots">...</span><span id="more">verbal and occasional physical abuse from both high school teachers and classmates. When a sexual bully outs Josh in his junior year, his parents send him to a clinic in Phoenix run by a Mormon psychologist who specializes in “curing” homosexuals. Frightened by the clinic’s aversion therapy techniques, Josh flees to Los Angeles where he lives briefly with an abusive lover and is later forced to support himself as a prostitute. Permeating the narration is Josh’s struggle with the homophobia of his Mormon upbringing, a process that eventually leads to his excommunication. Musically and academically gifted, he eventually finds deliverance in higher education and in more accepting religious communities. Throughout his journey, he meets many fascinating characters including kind, supportive people as well as wannabe rapists.</span></p>--}}
                        <div class="read-btn">
                            {{--<a href="#" class="btn btn-custom" onclick="myFunction()" id="myBtn">Read More</a>--}}
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
                
                <div class="col-lg-1"></div>
                
                <div class="col-lg-10" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-img">
                        <div class="sec3-img-man">
                            <!--<figure>-->
                            <!--    <img src="{{asset($page->sections[3]->value ?? 'images/man-2.png')}}" class="img-fluid" alt="Nicolas Shumway"> -->
                            <!--</figure>-->
                            
                            <video class="lazy" data-src="{{ asset('videos/Nicolas_intro_1.mp4') }}" data-poster="{{asset('images/poster-video.jpg')}}" id="myVideo" width="100%" height="100%" muted controls controlsList="nodownload">
                               <source data-src="{{ asset('videos/Nicolas_intro_1.mp4') }}" type="video/mp4">
                              
                            </video>
                            
                            <br><br>
                            
                            <div id="audio-control" class="muted">Unmute</div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-1"></div>
                
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
                                <img data-src="{{asset($page->sections[3]->value ?? 'images/man-2.png')}}" class="img-fluid lazy" alt="Nicolas Shumway"> 
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-text">
                        {!! $page->sections[2]->value !!}
                        
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

                @foreach($popular_books as $key => $popular_book)
                    <div class="col-lg-3" data-aos="fade-up">
                        <a href="{{route('front.bookDetail', $popular_book->id)}}">
                        <div class="sec6-opt">
                            <div class="sec6-opt-img">
                                <figure>
                                    <img data-src="{{asset($popular_book->image ?? 'images/book5.png')}}" class="img-fluid lazy" alt="{{$popular_book->alt_tag}}">
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
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!--<section class="section7">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="sec7-text">-->
    <!--                    <h1>New Audiobook</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">-->
    <!--                <div class="sec7-text">-->
    <!--                    <h1 class="comming">Comming <span class="d-block">Soon<span></h1>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">-->
    <!--                <div class="sec7-img-book">-->
    <!--                    <figure>-->
    <!--                        <img data-src="{{asset('images/old-person.webp')}}" class="img-fluid lazy" alt="Boy">-->
    <!--                    </figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    
    <section class="section3" id="about-sec">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-text">
                        
                        <h1 class="lax lax_preset_fadeIn:50:100 lax_preset_spin"> The Education of Joshua Chastain </h1>

                        <h2 style="color: #8e8d8d;"> A Gay Mormon Memoir </h2>
                        <br>
                        <h3 style="color: #8e8d8d;"> By: Nicolas Shumway </h3> 
                        <h3 style="color: #8e8d8d;">Narrated by: Ron Cook</h3>
                        <h3 style="color: #8e8d8d;">Length: 11 hrs and 37 mins </h3>
                        
                        <br>
                        
                        <audio controls controlsList="nodownload noplaybackrate nofullscreen">  
                            <source src="{{ asset('audio/EJC_Part_1_Chapter_2.mp3') }}" type="audio/ogg">
                        </audio>
                        
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Education-Joshua-Chastain-Mormon-Memoir/dp/B0D43DJPVX/" target="_blank" class="btn btn-custom sec3">Purchase Audio Book</a>
                        
                        
                    </div>
                    
                    
                    
                </div>
                
                 <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec3-img">
                        <div class="sec3-img-man">
                            <figure>
                                <img data-src="{{asset('audio/nicolas-audiobook2.jpg')}}" class="img-fluid lazy" alt="Nicolas Shumway"> 
                            </figure>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    

@endsection

@section('js')
   

<script>

$('#audio-control').click(function(){
    if( $("#myVideo").prop('muted') ) {
          $("#myVideo").prop('muted', false);
          $(this).text('Mute');
      // or toggle class, style it with a volume icon sprite, change background-position
    } else {
      $("#myVideo").prop('muted', true);
      $(this).text('Unmute');
    }
});
</script>
   
@endsection
