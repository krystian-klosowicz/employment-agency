@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <div class="d-flex flex-column align-items-center pb-3 pt-3 w-100">
            <div>
                <h1><i class="fas fa-clipboard-list"></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Firma</th>
                            <th scope="col">Lokalizacja</th>
                            <th scope="col">Data utworzenia</th>
                            <th scope="col">Operacja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $job)
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->company }}</td>
                                <td>{{ $job->location }}</td>
                                <td>{{ $job->created_at }}</td>
                                <td>
                                    <a class="btn mb-1  btn-sm btn-primary "
                                        href="{{ route('edit.offer', $job) }}">Edytuj<i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('offer.delete', $job) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn  btn-sm btn-danger mb-2">
                                            <a>Usuń<i class="fas fa-trash"></i></a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="container mx-auto w-75 mt-4">
                {{ $offers->links() }}
            </div>
        </div>
    </div>
@endsection
