<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simple Siakad</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <b>Simple Siakad</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ms-auto">
                        {{-- @guest --}}
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) === null ? 'active' : null }}" href="/">Data Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) === 'input' || Request::segment(1) === 'edit' ? 'active' : null }}" href="{{ Route('input')}}">Input Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="/about">About Me</a>
                            </li>
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> --}}
{{-- 
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> --}}
                            </li>
                        {{-- @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-success text-left text-white">
            <!-- Grid container -->
            <div class="container p-4">
          
              <!-- Section: Links -->
              <section class="">
                <!--Grid row-->
                <div class="row ">
                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('utm.png') }}" alt="utm" width="30%"><br><br>
                    <p>
                        <b>Jurusan Teknik Informatika<br>Universitas Trunojoyo Madura</b><br>
                        Jl. Raya Telang, Kecamatan Kamal, Bangkalan<br>69162 Indonesia<br>
                        Kampus Universitas Trunojoyo Madura
                    </p>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="margin-top: 50px">
                    <h5 class="text-uppercase">Contact</h5>
          
                    <ul class="list-unstyled mb-0">
                      <li>
                        Telp : 031-3011146
                      </li>
                      <li>
                          Fax : 031-3011506
                      </li>
                      <li>
                          email : if.gt@trunojoyo.ac.id
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="margin-top: 50px">
                    <h5 class="text-uppercase">Layanan</h5>
          
                    <ul class="list-unstyled mb-0">
                      <li>
                          Pembayaran UKT
                      </li>
                      <li>
                          Pendaftaran KP
                      </li>
                      <li>
                          Pendaftaran Wisuda
                      </li>
                      <li>
                          Administrasi
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-lg-2 col-md-6 mb-4 mb-md-0" style="margin-top: 50px">
                    <h5 class="text-uppercase">Resource</h5>
          
                    <ul class="list-unstyled mb-0">
                      <li>
                          e-Journal
                      </li>
                      <li>
                          Portal Tugas Akhir
                      </li>
                      <li>
                          Website Resmi Kampus
                      </li>
                      <li>
                          Download Administrasi
                      </li>
                    </ul>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </section>
              <!-- Section: Links -->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            {{-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div> --}}
            <!-- Copyright -->
          </footer>
    </div>
</body>
</html>