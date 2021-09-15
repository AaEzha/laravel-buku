@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Buku') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="my-2">
                            <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm">Tambah Buku</a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun</th>
                                    <th>Sinopsis</th>
                                    <th colspan="2">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $book->judul }}</td>
                                        <td>{{ $book->penulis }}</td>
                                        <td>{{ $book->penerbit }}</td>
                                        <td>{{ $book->tahun }}</td>
                                        <td>{{ $book->sinopsis }}</td>
                                        <td>
                                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('book.destroy', $book->id) }}" method="post" class="form-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
