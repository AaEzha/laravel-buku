@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Buku') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" required class="form-control" name="judul" id="judul"
                                    placeholder="Judul buku">
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" required class="form-control" name="penulis" id="penulis"
                                    placeholder="Nama penulis">
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" required class="form-control" name="penerbit" id="penerbit"
                                    placeholder="Nama penerbit">
                            </div>

                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="year" required class="form-control" name="tahun" id="tahun"
                                    placeholder="Tahun terbit">
                            </div>


                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <div class="custom-file">
                                    <input type="file" name="cover" class="custom-file-input" id="cover" required>
                                    <label class="custom-file-label" for="cover">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <textarea class="form-control" name="sinopsis" id="sinopsis" rows="3" required
                                    placeholder="Sinopsis buku"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('book.index') }}" class="btn btn-default">Kembali</a>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
