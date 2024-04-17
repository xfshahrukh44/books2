@extends('layouts.main')

@section('title', 'Featured detail')

@section('css')

@endsection


@section('content')

    <section class="section5 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h_p">
                        <h2 class="mb-0">Videos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Entrevista con Jorge Pontevecchio de Periodismo Puro, Argentina</h2>
                        <a href="{{asset('images/video-2.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-2.mp4')}}" type="video/mp4">
                        </a>
                        </video>
                        <a href="https://www.youtube.com/watch?v=bpcHRzVi5OA"  class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Conferencia sobre el liberalismo latinoamericano, Universidad Francisco Marroquín, Guatemala</h2>
                        <a href="{{asset('images/video-1.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-1.mp4')}}" type="video/mp4" class="img-fluid">
                        </a>
                        </video>
                        <a href="https://www.youtube.com/watch?v=bxkdk6IPTp8" class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Entrevista con Felipe Pigna, Grupo Planeta, Argentina</h2>
                        <a href="{{asset('images/video-3.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-3.mp4')}}" type="video/mp4">
                        </a>
                        </video>
                        <a href="https://www.youtube.com/watch?v=ggRXaEQ35iQ" class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Entrevista con CLACSO: Facultad de Derecho, Universidad de Buenos Aires, Argentina</h2>
                        <a href="{{asset('images/video-4.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-4.mp4')}}" type="video/mp4">
                        </a>
                        </video>
                        <a href="https://youtu.be/GgLowmiM2Ls?si=x9IhvP6OWJAx4sI2"  class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Entrevista com Teixeira Coelho Netto no Itaú Cultural, Brasil</h2>
                        <a href="{{asset('images/video-5.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-5.mp4')}}" type="video/mp4" class="img-fluid">
                        </a>
                        </video>
                        <a href="https://youtu.be/IDRE0Q7ELT0?si=AGgh62jFQqsE2kDb" class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video">
                        <h2>Interview with Nicolas Shumway, Director of LLILAS</h2>
                        <a href="{{asset('images/video-6.mp4')}}" target="_blank">
                            <video width="320" height="240" muted class="vid">
                                <source src="{{asset('images/video-6.mp4')}}" type="video/mp4">
                        </a>
                        </video>
                        <a href="https://youtu.be/pE_MRzZuY24?si=x2tKLmzX4RLGnhSs" class="btn btn-custom">Watch on YouTube</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
