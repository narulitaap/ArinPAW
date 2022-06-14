@extends('app')

@section('content')
<div class="container">
    <h2 class="text-success" style="margin: 10px">Detail Data Mahasiswa</h2>
    @foreach($mahasiswa as $p)
    <form id="logout-form" action="{{ Route('editproses') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $p->id }}">
        <div class="row justify-content-md-center">
            <div class="col-lg-5 col-md-5 mb-5 mb-md-0" style="margin: 30px;">
                <div class="form-group" style="margin: 30px">
                    <label><b>Nama Mahasiswa</b></label>
                    <input type="text" name="nama" class="form-control" value="{{ $p->nama}}">
                </div>
                <div class="form-group" style="margin: 30px">
                    <label><b>NIM</b></label>
                    <input type="text" name="nim" class="form-control" value="{{ $p->nim}}">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 mb-5 mb-md-0" style="margin: 30px;">
                <div class="form-group" style="margin: 30px">
                    <label><b>Alamat Email</b></label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="{{ $p->email}}">
                </div>
                <div class="form-group" style="margin: 30px">
                    <label><b>Alamat Rumah</b></label>
                    <input type="text" name="alamat" class="form-control" value="{{ $p->alamat}}">
                </div>
            </div>
        </div>
        <div class="d-flex align-items-end flex-column">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
    @endforeach

    {{-- <div class="row justify-content-md-center">
        <div class="col-lg-5 col-md-5 mb-5 mb-md-0 card border-primary" style="margin: 30px;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 mb-5 mb-md-0 card border-primary" style="margin: 30px;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div> --}}
</div>

@endsection


