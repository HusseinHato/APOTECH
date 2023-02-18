@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex justify-content-center align-items-center bg-success" style="height: 91.5vh;">
        <div class="card shadow" style="width: 1200px; height: 600px">
            <div class="card-body d-flex justify-content-between py-4">
                <div class="col-md-4 text-center"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; width: 20%">
                    <div class="d-flex flex-column align-items-center">
                        @if (Auth::user()->jk == 1)
                            <img src="{{ asset('assets/img/male.jpg') }}" alt="Avatar" class="img-fluid"
                                style="width: 80px;" />
                        @else
                            <img src="{{ asset('assets/img/female.jpg') }}" alt="Avatar" class="img-fluid"
                                style="width: 80px;" />
                        @endif
                        <small class="fst-italic mt-2 mb-3">{{ Auth::user()->nama }}</small>
                    </div>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2"
                        onclick="location.href='/profile'"><small>Profil Saya</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#profil-{{ Auth::user()->id }}"><small>Ubah Profil</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#ubahpw"><small>Ubah Password</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2" onclick="location.href='/rwytpmblian'"
                        type="button">
                        <small>Pesanan Saya</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success" onclick="location.href='/riwayatpmblianrsp'"
                        type="button">
                        <small>Resep Saya</small>
                    </button>
                </div>
                <div class="col-md-7 me-4" style="width: 70%">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-text">ID resep : {{ $pesananresep->resep_id }}</h5>
                            <h5 class="card-text">Obat - Obat : {{ $pesananresep->obat_obat }}</h5>
                            <h5 class="card-text">Total harga : Rp.{{ $pesananresep->total_harga }},00</h5>
                            <h5 class="card-text">Status : {{ $pesananresep->status }}</h5>
                          <a href="{{ url()->previous() }}" class="btn btn-success mt-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
