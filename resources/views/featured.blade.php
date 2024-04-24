@extends('layouts.main')

@section('title', "Spotlight on Shumway's New Novel")
@section('description', "Learn about the wonderful narrative of Shumway's Newest novel! Immerse yourself in literary brilliance with this captivating spotlight feature. Don't miss out!")

@section('css')

@endsection


@section('content')

    <section class="section5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
{{--                        <h2>Featured: Shumway’s New Novel</h2>--}}
                        <h2>{{$page->sections[0]->value ?? ''}}</h2>
                    </div>
                </div>
                <div class="col-lg-1 p-0">
                </div>
                <div class="col-lg-10 p-0" data-aos="fade-down" data-aos-duration="2000">
                    <div class="sec5-img-book">
                        <figure>
                            <img src="{{asset($page->sections[1]->value ?? 'images/book9.png')}}" class="img-fluid" alt="">
                        </figure>
                        <a href="{{route('front.featuredDetail', 123)}}" class="btn btn-custom">{{$page->sections[2]->value}}</a>
                        <a target="_blank" href="{{$page->sections[3]->value}}" class="btn btn-custom">Check on Amazon</a>
                    </div>
                </div>
                <div class="col-lg-1 pr-0">

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
