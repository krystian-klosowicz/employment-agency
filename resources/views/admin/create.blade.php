@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top:10vh;">
                    <div class="card-header text-center">Dodaj ofertę pracy</div>

                    <div class="card-body" style="background: #ecf5fc;
                    padding: 40px 50px 45px;">
                        <form method="POST" action="{{ route('store.offer') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" minlength="5" maxlength="100"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Opis</label>

                                <div class="col-md-6">
                                    <textarea id="description" minlength="20" maxlength="500"
                                        class="form-control @error('description') is-invalid @enderror" name="description" required autofocus>{{ old('description') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('amount') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="company" class="col-md-4 col-form-label text-md-right">Firma</label>

                                <div class="col-md-6">
                                    <input id="company" type="text" minlength="5" maxlength="100"
                                        class="form-control @error('company') is-invalid @enderror" name="company"
                                        value="{{ old('company') }}" required autocomplete="company" autofocus>

                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">Lokalizacja</label>

                                <div class="col-md-6">
                                    <input id="location" type="text" minlength="5" maxlength="100"
                                        class="form-control @error('location') is-invalid @enderror" name="location"
                                        value="{{ old('location') }}" required autocomplete="location" autofocus>

                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="salary" class="col-md-4 col-form-label text-md-right">Wynagrodzenie</label>

                                <div class="col-md-6">
                                    <input id="salary" type="number" step="1" min="500"
                                        class="form-control @error('salary') is-invalid @enderror" name="salary"
                                        value="{{ old('salary') }}" required autocomplete="salary">

                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">Numer telefonu</label>

                                <div class="col-md-6">
                                    <input id="tel" type="number" step="1" min="100000000"
                                        class="form-control @error('tel') is-invalid @enderror" name="tel"
                                        value="{{ old('tel') }}" required autocomplete="tel">

                                    @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">Kategoria</label>
                                <div class="col-md-6">
                                    <select id="job_category_id"
                                        class="form-control @error('job_category_id') is-invalid @enderror"
                                        name="job_category_id">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('job_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <a>Dodaj ofertę</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
