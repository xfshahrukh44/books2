@extends('layouts.main')

@section('title', 'Book detail')

@section('css')

@endsection


@section('content')

    <section class="section5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2>{{$book->title}}</h2>
                    </div>
                </div>
                <div class="col-lg-2 p-0">
                </div>
                <div class="col-lg-12 p-0" data-aos="fade-down" data-aos-duration="2000">
                    <div class="sec5-img-book book-1">
                        <figure>
                            <img src="{{asset($book->image ?? 'images/book10.png')}}" class="img-fluid" alt="">
                        </figure>
                        <!-- <a href="#" class="btn btn-custom">Amazon</a> -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="text-inner-book">
                        {!! $book->description !!}
{{--                        <p>The Invention of Argentina was published in 1991 by the University of California Press. A--}}
{{--                            Spanish translation was published in Argentina by EMECE/Planeta in 1993, translated by the--}}
{{--                            distinguished Argentine novelist, César Aira. With the slightly expanded title of La--}}
{{--                            invención de la Argentina: Historia de una Idea, the Spanish edition was updated,--}}
{{--                            corrected, and somewhat expanded in 2005. The University of São Paulo Press published a--}}
{{--                            Portuguese translation in 2008. All editions are still in print. The English and Spanish--}}
{{--                            editions are available for e-readers. In 2023, EMECE/Planeta published a new edition to--}}
{{--                            commemorate the 30th anniversary of the book’s appearance in Argentina. Selected by the--}}
{{--                            The New York Times as “a notable book of the year”, the book garnered the following--}}
{{--                            critical comments:</p>--}}

{{--                        <p>--}}
{{--                            "This masterly intellectual and cultural history focuses on the 19th-century roots of--}}
{{--                            Argentine nationalism and what Nicolas Shumway, now an emeritus professor at Rice--}}
{{--                            University in Houston, Texas, calls its “guiding fictions”. His argument is that “this--}}
{{--                            ideological legacy is in some sense a mythology of exclusion rather than a unifying--}}
{{--                            national ideal, a recipe for divisiveness rather than consensual pluralism.” That legacy--}}
{{--                            has shaped the past 100 years and lurks beneath the social conflicts, between rich and--}}
{{--                            poor, capital and interior, that have marked the country’s long decline.”--}}
{{--                            —The Economist--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “This brilliant book tells the history of the histories that emerge in nineteenth-century--}}
{{--                            Argentina … It reads like a novel, but is documented like a scientific treatise.”--}}
{{--                            —Josefina Ludmer, University of Buenos Aires--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “Original in conception and execution, full of interesting data and interpretations,--}}
{{--                            useful and enlightening … [Shumway] is particularly good on the various uses to which--}}
{{--                            history is put in Argentina.”--}}
{{--                            —David Rock, University of California, Santa Barbara--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “Working against the grain of conventional reading, Shumway’s book is an invitation to--}}
{{--                            reread Argentina in a new and dynamic way—a challenging enterprise if one considers the--}}
{{--                            resiliency of the cultural myths in that country. Shumway bids his reader to scrutinize--}}
{{--                            the gallery of national heroes in a refreshingly different light.”--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            —Sylvia Molloy, New York University--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            An engaging account of the writing and debates of the remarkable group of ideologues who--}}
{{--                            shaped Argentina’s destiny, several of whom rose to become presidents of the republic.”--}}
{{--                            —David Brading, New York Times Book Review--}}

{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “Shumway’s history of Argentine histories offers illuminating parallels and contrasts to--}}
{{--                            the national experience of other parts of the world.”--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            —Peter Beck, Times Higher Education Supplement--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “An important book. There are few countries where ghosts of the past haunt the present so--}}
{{--                            relentlessly. Shumway offers us a clear, well-written, and extremely useful guide to the--}}
{{--                            imaginings of the past and their persistence to this day.”--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            —Jeremy Adelman, Cambridge Journals, Latin American Studies--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            “A captivating, cultural history.”--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            —Chris Kline, The Times of the Americas--}}
{{--                        </p>--}}

                        @if(!is_null($book->amazon))
                            <a target="_blank" href="{{$book->amazon}}" class="btn btn-custom black-inner">Check On Amazon</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
