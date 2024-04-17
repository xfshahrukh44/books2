@extends('layouts.main')

@section('title', 'Articles')

@section('css')
    <style>
        a.page-link {
            color: #4d0000;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #4d0000;
            border-color: #4d0000;
        }
    </style>
@endsection


@section('content')

    <section class="section5 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2 class="mb-0">Articles</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section5 mt-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-lg-4">
                        <a href="{{route('front.articleDetail', $article->id)}}" class="for-link">
                            <div class="thumbnail thumbnail-show-1">
                                {!! $article->ellipsified_content(400) !!}
{{--                                <p>RGENT'INA WOULD SfiEv to orrvR little justification for tribal sentiment. Like most--}}
{{--                                    countries,--}}
{{--                                    rind particularly New World countries, Argentina is in no sense an extended biological--}}
{{--                                    family--}}
{{--                                    united by common ancestry. The area’s first inhabitants were warring native tribes who--}}
{{--                                    became--}}
{{--                                    “Indians” only after </p>--}}
                            </div>
                        </a>

                        <div class="thumbnail-bottom-text">
                            <p>{{$article->title}}</p>
                        </div>

                    </div>
                @endforeach
            </div>
            {{$articles->links()}}
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
