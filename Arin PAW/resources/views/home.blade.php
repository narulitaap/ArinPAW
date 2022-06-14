@extends('app')

@section('content')
<div class="container">
    <h2 class="text-success" style="margin: 10px">Data Mahasiswa</h2>
    <div class="row justify-content-md-center">
        @foreach($mahasiswa as $p)
            <div class="col-lg-5 col-md-2 mb-2 mb-md-0 card border-grey" style="margin: 30px;border-radius:40px;">
                <div class="card-body row">
                    <div class="col-lg-6" style="margin-top: 10px;">
                        <h6 class="card-title">{{ $p->nama }}</h6>
                        <p>{{ $p->nim }}</p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="/hapus/{{ $p->id }}"><i class="fa fa-trash icons-hapus"></i></a>
                        <a href="/edit/{{ $p->id }}"><i class="fa fa-edit icons-edit"></i></a>
                        <p>{{ $p->email }}</p>
                    </div>
                    <div class="col-lg-12" style="margin-top:-10px;">
                        <p>{{ $p->alamat }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

