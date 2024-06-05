@extends('layouts.main')

@section('title', 'Buy the Book and Read Literary Stories')
@section('description', "Buy the book The Education of Joshua Chastain, a novel by Nicolas Shumway, that tells the story of a gay Mormon boy in a small Arizona town.")

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
                        <h2 class="mb-0">Nicolas Shumway: Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section5 back-books">
        <div class="container-fluid">
            <div class="row align-items-center">
                @foreach($books as $key => $book)
                    <div class="col-lg-6">
                        <div class="now-noval">
                            <h2 class="italic-font">{{$book->title}}</h2>
{{--                            <p>The Invention of Argentina was published in 1991 by the University of California Press. A Spanish translation was published in Argentina by EMECE/Planeta in 1993, translated by the distinguished Argentine novelist, César Aira. With the slightly expanded title of La invención de la Argentina: Historia de una Idea, the Spanish edition was updated, corrected, and somewhat expanded in 2005.</p>--}}
                            {!! $book->ellipsified_description() !!}
                            <div class="first-book-noval btn">
                                <a href="{{route('front.bookDetail', $book->id)}}" class="btn btn-custom black">Read Mor terte</a>
                                @if(!is_null($book->amazon))
                                    <a target="_blank" href="{{$book->amazon}}" class="btn btn-custom black">Amazon</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="first-book-noval">
                            <figure>
                                <img src="{{asset($book->image ?? 'images/book7.png')}}" class="img-fluid" alt="">
                            </figure>

                        </div>
                    </div>
                @endforeach
            </div>

            {{$books->links()}}
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript">
        
         
        
    </script>
@endsection
