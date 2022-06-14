@extends('app')

@section('content')
<div class="container">
    <h2 class="text-success" style="margin: 10px">Input Data Mahasiswa</h2>
    <form id="logout-form" action="{{ Route('inputproses') }}" method="POST">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-lg-5 col-md-5 mb-5 mb-md-0" style="margin: 30px;">
                <div class="form-group" style="margin: 30px">
                    <label><b>Nama Mahasiswa</b></label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group" style="margin: 30px">
                    <label><b>NIM</b></label>
                    <input type="text" name="nim" class="form-control">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 mb-5 mb-md-0" style="margin: 30px;">
                <div class="form-group" style="margin: 30px">
                    <label><b>Alamat Email</b></label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="form-group" style="margin: 30px">
                    <label><b>Alamat Rumah</b></label>
                    <input type="text" name="alamat" class="form-control">
                </div>
            </div>
        </div>
        <div class="d-flex align-items-end flex-column">
            <button type="submit" class="btn btn-primary ">Submit Data</button>
        </div>
    </form>

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