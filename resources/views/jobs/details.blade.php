@extends('layouts.app')
@section('content')
    <div style="height: 85vh" class="container d-flex-row justify-content-center align-items-center pt-5">

        <div class="d-flex align-items-center justify-content-center row row-cols-1 row-cols-md-3 g-2"
            style="padding-top: 6vh;">
            <div class="col ">
                <div class="card h-100">
                    <div class="card text-center m-1">
                        <div class="card-body">
                            <h2 style="text-align: center;">{{ $job->name }}</h2>
                            <p>Opis: {{ $job->description }}</p>
                            <p>Lokalizacja: {{ $job->location }}</p>
                            <p>Wynagrodzenie: {{ $job->salary }}</p>
                            <p>Telefon kontaktowy: {{ $job->tel }}</p>
                            <p>Już teraz złoż CV wysyłając mail'a na adres: {{ $job->email }}</p>
                            <p>Data publikacji: {{ $job->created_at }}</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('jobs/footer', ['status' => 'complete'])
@endsection
