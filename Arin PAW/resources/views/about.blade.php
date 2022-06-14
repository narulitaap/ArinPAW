@extends('app')

@section('content')
<div class="container">
    <h2 class="text-success" style="margin: 10px">About Me</h2>
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-5 mb-5 mb-md-0" style="margin: 10px;">
            <img src="{{ asset('arin.jpg')}}" alt="foto" width="100%">
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-3">
            <h5 class="text-success text-center">Narulita Arien Pramesti</h5>
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-12">
            <h2 class="text-success" style="margin: 10px">Background</h2>
            <p style="margin: 10px">
                Nama saya Narulita Arien Pramesti, saya berasal dari Madiun. 
                Saya anak pertama dari dua bersaudara. Saya lulusan MI Islamiyah Kota Madiun, SMPN 1 Balerejo,
                SMAN 2 Mejayan, dan kini melanjutkan kuliah di Universitas Trunojoyo Madura Jurusan Teknik Informatika
            </p>
        </div>
        <div class="col-lg-12">
            <h2 class="text-success" style="margin: 10px">Suka Duka Praktikum PAW</h2>
            <p style="margin: 10px">
                Saya kesusahan sekali dalam mengerjakan praktikum terakhir ini, 
                tapi saya senang karena bisa eksplore materi baru yang belum pernah saya pelajari sebelumnya.
            </p>
        </div>
    </div>
</div>

@endsection

