@extends('backend.v_layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body border-top">
                    <h5 class="card-title">{{ $judul }}</h5>

                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Selamat Datang {{ Auth::user()->nama }}</h4>
                    Aplikasi Toko Online Dengan Hak Akses Yang Anda Sebagai Miliki Sebagai
                    <b>
                        @if(Auth::user()->role == 1)
                        Super Admin
                        @elseif(Auth::user()->role == 0)
                        Admin
                        @endif    
                    </b>

                    Ini adalah halaman utama dari aplikasi web programming.
                    Studi Kasus Toko Online.
                    <hr>
                    <p>Kuliah...? BSI Aja!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>      
@endsection