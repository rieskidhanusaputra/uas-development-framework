@extends('pages.layouts.main')

<div class="backgrounds">
    @section('container')
        <div class="text-center container-fluid heroes">
            <h1 class="fw-bold text-body-emphasis">WELCOME TO KIKA COMPANY</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4 my-4">Berkomitmen untuk memberikan solusi inovatif dan layanan berkualitas tinggi. Dengan
                    pengalaman bertahun-tahun dan tim profesional yang berdedikasi, kami terus berusaha untuk menjadi yang
                    terbaik dalam apa yang kami lakukan.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="/login"><button type="button" class="btn btn-dark btn-lg px-4 gap-3">Login</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
