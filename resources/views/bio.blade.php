@extends('layouts.main')

@section('title', 'Biography of Renowned Scholar & Author ')
@section('description', 'Meet Nicolas Shumway, retired professor & author of The Education of Joshua Chastain, a novel based on his own life experiences as a gay Mormon.')

@section('css')

@endsection


@section('content')

    <section class="section1-bio">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2 class="mb-5">Nicolas Shumway: The Early Years</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/13.jpg')}}" class="img-fluid" alt="">
                            <h4>Two-year-old Nicolas</h4>
                        </figure>

                    </div>
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/4.jpg')}}" class="img-fluid" alt="">
                            <h4>Un Petit Chamois</h4>
                        </figure>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bio-text">
                        <p>Born in a Presbyterian mission hospital on the Navajo Reservation, Nicolas
                            Shumway was raised in St. Johns, Arizona, a small farming and ranching
                            community in the northeastern corner of the state. His father owned a garage and
                            tire shop, and his mother taught grade school music. His first name—Nicolas
                            without an “h”—follows the French spelling which his mother got from a popular
                            violin method book written by a Frenchman, Nicolas Laoureux. The name
                            Shumway is a misspelled French name that was originally Chamois, also the
                            name of a wild mountain goat that lives in the French Alps.</p>

                        <p>At an early age—five or six years old? —Nicolas realized that he was
                            different from other boys. As the years progressed, he recognized that he was
                            homosexual. Processing this fact while determining how it would affect his
                            relationship to his family, his community, and the LDS Church was a major issue
                            during his teens and twenties. But he soon realized that being gay gave him
                            entrance to a large social, religious, and political community from which emerged literally
                            hundreds of friends across the globe. Best of all, it led
                            him to his husband and life partner, Robert Mayott. In 2023, Robert and Nicolas
                            celebrated the thirty-sixth anniversary of the day they met and the tenth
                            anniversary of their marriage.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/7.jpg')}}" class="img-fluid" alt="">
                            <h4>Nicolas & Robert in 1987</h4>
                        </figure>

                    </div>
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/5.jpg')}}" class="img-fluid" alt="">
                            <h4>Robert Today
                            </h4>
                        </figure>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="section1-bio">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-9">
                    <div class="h_p">
                        <h2 class="mb-5">Nicolas Shumway: The Professor</h2>
                    </div>
                    <div class="bio-text">
                        <p>Graduating with highest honors, Shumway received his BA degree from BYU in 1969
                            with majors in Spanish and music and a minor in French. His time at BYU was interrupted by a two-year
                            mission for the LDS Church in Mexico. Due to growing doubts about the Mormon message,
                            Shumway was not an especially good missionary, particularly because he found Mexicans more
                            interesting than what he was supposed to teach them. Still, he considers the mission a pivotal
                            experience which allowed him to become fluent in Spanish and helped pave the way to his
                            academic career as a professor of Latin American Studies.</p>

                        <p>He completed his MA in 1971 and PhD in 1976 at UCLA with concentrations in
                            Hispanic literatures and linguistics. After receiving his doctorate, he taught at Pepperdine
                            University, Indiana University Northwest, Yale University, The University of Texas at Austin,
                            and Rice University. At Yale he chaired the Latin American Studies program for three years and
                            directed the Spanish language program for eight. In 1987, he received tenure at Yale and was
                            promoted to Full Professor in 1992. After fourteen years at Yale, in 1993, he accepted an
                            appointment at The University of Texas at Austin as the Tomás Rivera Regents Professor of
                            Spanish. Two years later he became director of the UT Teresa Lozano Long Institute of Latin
                            American Studies, a position he held for eleven years. From 2008 to 2010, he served as Chair of
                            the UT Department of Spanish and Portuguese. In July of 2010, he became Dean of Humanities
                            and the Frances Moody Newman Professor of Humanities at Rice University, a position he held
                            for seven years. He retired from Rice University in July of 2020 and now holds the title of
                            Frances Moody Newman Professor of Spanish, Emeritus. He continues writing and lecturing,
                            primarily in the Rice University Glasscock School of Continuing Education.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/6.jpg')}}" class="img-fluid" alt="">
                            <h4>Graduation Procession at Yale</h4>
                        </figure>
                    </div>
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/10.jpg')}}" class="img-fluid" alt="">
                            <h4>Posing with UT Cheerleaders in <span class="d-block">Recognition of the Preeminence
                                of</span>UT’s LLILAS
                            </h4>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section1-bio scratch_img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2 class="mb-5">Nicolas Shumway: Books</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    @php
                        $book = \App\Models\Book::find(2);
                    @endphp
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset($book->image ?? 'images/book5.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="first-book-noval">
                            <a href="{{route('front.bookDetail', $book->id)}}" class="btn btn-custom black">Read More</a>
                            <a href="{{$book->amazon}}" class="btn btn-custom black">Amazon</a>
                        </div>
                    </div>
                    @php
                        $book = \App\Models\Book::find(4);
                    @endphp
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset($book->image ?? 'images/book5.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="first-book-noval">
                            <a href="{{route('front.bookDetail', $book->id)}}" class="btn btn-custom black">Read More</a>
                            <a href="{{$book->amazon}}" class="btn btn-custom black">Amazon</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bio-text">
                        <p>
                            His scholarship explores Latin-American history and culture with particular
                            emphasis on Argentina, Brazil, and Mexico. He has also written on advocacy and politics
                            in the foreign-language classroom, and on the ideologies of Hispanism. His best known
                            book, <span class="italic">The Invention of Argentina</span> (University of California Press, 1991) was selected by
                            The New York Times as “a notable book of the year” and received Honorable Mention for
                            the Bryce Wood Book Award of the Latin American Studies Association in 1992.
                            EMECE Editores, Buenos Aires, published a Spanish translation of the book in 1993. An
                            extensive revision of the book appeared in Spanish in 2005. The University of São Paulo
                            Press published a Portuguese translation in 2009. The book is currently available in all
                            three languages and as an e-book in both English and Spanish. In 2023, The Economist
                            magazine recommended the book as one of seven essential titles to read about Argentina.</p>

                        <p>In 2012, he published with EMECE/Planeta in Buenos Aires <span class="italic">Historia Personal De
                        Una Pasión Argentina</span>. Written in Spanish, the book consists of a series of essays, the two
                            lengthiest ones being an autobiographical account of Shumway’s dialogue with
                            Argentina and Argentine culture since first visiting the country in 1975, and the second,
                            an exploration of Argentine liberalism and its detractors. </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    @php
                        $book = \App\Models\Book::find(2);
                    @endphp
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset($book->image ?? 'images/book5.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="first-book-noval">
                            <a href="{{route('front.bookDetail', $book->id)}}" class="btn btn-custom black">Read More</a>
                            <a href="{{$book->amazon}}" class="btn btn-custom black">Amazon</a>
                        </div>
                    </div>
                    @php
                        $book = \App\Models\Book::find(5);
                    @endphp
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset($book->image ?? 'images/book5.png')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="first-book-noval">
                            <a href="{{route('front.bookDetail', $book->id)}}" class="btn btn-custom black">Read More</a>
                            <a href="{{$book->amazon}}" class="btn btn-custom black">Amazon</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="bio-text">
                        <p>In Fall of 2013, the Universidad
                            de San Pablo in Tucumán, Argentina awarded him an honorary doctoral degree in
                            recognition of his scholarly work on Argentina. Shumway is also the author of a
                            successful Spanish language textbook, <span class="italic">Español en Español</span>, published by Holt, Rinehart
                            and Winston. The textbook went through four editions—1984, 1988, 1992, and 1996.
                            The first edition was co-authored with David Forbes. Shumway is the sole author
                            of the last three editions. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section1-bio scratch_img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="h_p">
                        <h2 class="mb-5">Nicolas Shumway: <span class="d-block">The Lecturer and Visiting Professor</span>
                        </h2>
                    </div>
                    <div class="bio-text">
                        <p>Fluent in Spanish and Portuguese, Shumway has held visiting appointments at
                            the Universidade de São Paulo in Brazil and at two Argentine universities, the
                            Universidad de San Andrés and the Universidad Torcuato di Tella, both in Buenos
                            Aires. Shumway has received two Fulbright appointments, one as a Researcher/
                            Teacher in Brazil and another as a Senior Specialist in American Studies. A popular
                            speaker, he has lectured at universities throughout the Americas, Europe and China,
                            and has several times been featured as a speaker by the Houston World Affairs
                            Council and the Houston Forum. In 2013, the Universidad de San Pablo-Tucumán awarded him an
                            honorary doctorate in recognition of his work on Argentina.</p>

                        <p>Throughout his forty-five-year teaching career, he has gained wide
                            recognition as a leader in international studies and foreign-language education.
                            Prominent in professional circles, he has served on multiple occasions on selection
                            panels for the National Endowment of the Humanities and the Mellon Foundation.
                            For four years, he served on the Executive Council of the Modern Language
                            Association.</p>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/bio-images/8.jpg')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="bio-img">
                        <figure>
                            <img src="{{asset('images/man-2.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section1-bio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 mt-5">
                            <div class="bio-img mt-5">
                                <figure>
                                    <img src="{{asset('images/piyano-1.jpg')}}" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="h_p">
                                <h2 class="mb-5">Nicolas Shumway: The Musician
                                </h2>
                            </div>
                            <div class="bio-text">
                                <p>In addition to his academic work, Shumway has pursued a parallel career in
                                    music. Singer, pianist, and organist, he has held staff positions in several churches,
                                    including nine years as organist and choir director at First Presbyterian Church of
                                    New Haven.
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="bio-text">

                                <p> Also in New Haven, Shumway directed for three years The Redeemer Oratorio Choir.
                                    Although partially supported by Church of the Redeemer, the Oratorio Choir was a community
                                    organization consisting of around fifty singers. Works performed include Bach’s
                                    Magnificat, Rossini’s Messe Solennelle, <span>Brahms’ German Requiem,</span> and
                                    Poulenc's Gloria. He has also sung with several professional choirs including
                                    the Los
                                    Angeles Master Chorale, the Roger Wagner Chorale, Music of the Baroque of
                                    Chicago, CONCORA and Pro-Arte Singers (both located in Connecticut), Conspirare
                                    of Austin, and the Bach Society of Houston. An accomplished oratorio singer, he has sung solo bass roles in
                                    performances of J.S. Bach’s B-Minor Mass, St. Matthew Passion, and numerous
                                    cantatas. Other solo roles include Mozart’s Requiem Mass and Handel’s Messiah
                                    and Judas Maccabaeus. He has also appeared as a pianist/accompanist for several violinists,
                                    playing works by Bach, Brahms, Beethoven, and Mozart.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="bio-img mt-5">
                        <figure>
                            <img src="{{asset('images/bio-images/11.jpg')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="bio-img mt-5">
                        <figure>
                            <img src="{{asset('images/bio-images/12.jpg')}}" class="img-fluid" alt="">
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
