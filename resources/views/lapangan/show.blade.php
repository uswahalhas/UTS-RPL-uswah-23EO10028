@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <img 
          src="{{ asset('images/lapangan/' . $lapangan->gambar) }}" 
          class="card-img-top" 
          alt="{{ $lapangan->nama }}" 
          style="max-height: 400px; object-fit: cover;"
        >
        <div class="card-body text-center">
          <h4 class="card-title">{{ $lapangan->nama }}</h4>
          <p class="card-text">Silakan lanjutkan untuk memesan lapangan ini sesuai jadwal yang Anda inginkan.</p>

          <a 
            href="{{ route('booking.create', ['lapangan_id' => $lapangan->id]) }}" 
            class="btn btn-success"
          >
            Booking Sekarang
          </a>

          <a href="{{ route('lapangan.index') }}" class="btn btn-secondary ms-2">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
