@extends('layouts.Frontend.app')
@section('title')
    Visi dan Misi
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($visimisi)
                <div class="row about-page1-inner" style="margin-top: 5%">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-content-holder">
                            <div class="content-box">
                                <h2>VISI</h2>
                                <p>{{$visimisi->visi}}</p>
                            </div>
                            <div class="content-box">
                                <h2>MISI</h2>
                                <p> 1. Meningkatkan Tingkat Pendidikan Masyarakat Yang Putus Sekolah Melalui Pendidikan Kesetaraan, Paket A, Paket B, Paket C. <br/>
                                    2. Menyediakan Sarana dan Prasarana Pendidikan Bagi Masyarakat, Secara Berkualitas dan Terjangkau. <br/>
                                    3. Memberikan Bakat Pendidikan Dibutuhkan Masyarakat, Dengan Dasar Iman Dan Agama, Untuk Menghadapi Dunia Usaha di Masa Datang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
                        </div>
                    </div>
                </div>
            @else
                <img src="{{asset('Assets/Frontend/img/empty.svg')}}" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            @endif
        </div>
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection
