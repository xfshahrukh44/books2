{{--@foreach($blog as $key => $val_blog)--}}
{{--<a href="{{ route('blog_detail',['id' => $val_blog->id]) }}">--}}
{{--{{ route('blog_detail',['id' => $val_blog->id]) }}--}}
{{--{{asset($val_blog->image)}}--}}
{{--{{ $val_blog->name }}--}}
{{--{!! $val_blog->short_detail !!}--}}
@extends('layouts.main')

@section('title', 'Check out the Educational blog posts')
@section('description', "Nicolas Shumway's enlightening educational blog, where insightful posts provide valuable perspectives on diverse topics and offer valuable knowledge.")

@section('css')
<style>
    .second-sec.about-inner {
        padding-top: unset;
    }
</style>
@endsection


@section('content')

    <section class="second-sec about-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="three-img">
                        <div class="btn-flux">
                            <a class="btn btn-custom about" type="submit">Blogs</a>
                        </div>
                        <div class="buld-img">
                            <h2> {!! $page->content !!} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="color-extra sec5">
                        <span></span>
                    </div>
                    <div class="sec5-img-book">
                        <figure>
                            <img src="{{ $blog->image_link }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 pr-0" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="sec5-text">
                        <span>{!! $blog->short_detail !!}</span>
                        <h1> {{ $blog->name }} </h1>
                        <span>By {{ $blog->byperson }}</span>
                        <p>{!! $blog->detail !!}</p>
                        <div class="sec5-flux">
                            <!--<a href="#" class="btn btn-custom b">Learn More</a>-->
                            <p>${{ $blog->price ?? 0 }}</p>
                        </div>
                        <span></span>
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
                            <h1 class="ml2">LATEST BOOKS</h1>
                        </div>

                        <div class="text-a-sec-6">
                            <a href="{{ route('front.books') }}">
                                <p>Explore more</p><i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @php
                    $counter = 0;
                @endphp
                
                @foreach ($books as $book)
                    @php
                        $aos = $counter % 2 === 0 ? 'fade-up' : 'fade-down';
                        $counter++;
                    @endphp
                    <div class="col-lg-3" data-aos="{{ $aos }}">
                        <div class="sec6-opt">
                            <div class="sec6-opt-img">
                                <figure>
                                    <img src="{{ asset($book['image_link']) }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <a href = "{{ route('front.bookDetail', ['id' => $book->id]) }}">
                            <div class="sec6-opt-text">
                                
                                <h6>@if(!empty($book['title']))
                                             {{ Illuminate\Support\Str::words($book['title'], 3) }}
                                             @endif</h6>
                                <div class="small-p-flux">
                                    <div class="p-smallflux-main">
                                        <p>@if(!empty($book['alt_tag']))
                                             {{ Illuminate\Support\Str::words($book['alt_tag'], 3) }}
                                             @endif</p>
                                    </div>
                                    <!--<div class="i-smallflux-main">-->
                                    <!--    <i class="fa-solid fa-star"></i>-->
                                    <!--    <p>{{ $book['rating'] }}</p>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
