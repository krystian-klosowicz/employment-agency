@extends('layouts.app')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top: 6vh;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/img/praca.jpg') }}" class="d-block w-100" alt="praca.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:white;">U nas znajdziesz prace!</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="oferty">
        <div class="row" style="padding-top:1vh;">
            <h3 style="text-align:center;">Oferty pracy</h3>

            <form action="{{ route('wyszukaj') }}" method="GET" style="padding-left:1.5vw;">
                <input type="text" name="name" />
                <select id="job_category" name="job_category" style="width:70vh;" required>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Wyszukaj</button>
            </form>


            <div class="container">
                @forelse ($jobs as $job)
                    <div class="col">
                        <div class="card" style="width: 100%; margin:1vh;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $job->name }}</h5>
                                <p class="card-text">Miejsce pracy: {{ $job->location }}</p>
                                <p class="card-text">Wynagrodzenie: {{ $job->salary }} PLN</p>
                                <p class="card-text">Data utworzenia: {{ $job->created_at }} PLN</p>


                                <a href="{{ route('jobs.show', ['id' => $job->id]) }}"
                                    class="btn btn-primary float-right">Pokaż
                                    ofertę</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Puste</h1>
                @endforelse
            </div>
            <div class="container mx-auto w-50 mt-4">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
    @include('shared/footer', ['status' => 'complete'])
@endsection
