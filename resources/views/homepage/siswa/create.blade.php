@extends('homepage.layouts.main')

@section('title', 'Data Siswa')

@section('content')
<!-- Card Section -->
<div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7">
    <div class="text-center mb-8">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
        Tambah Data Siswa
      </h2>
      <p class="text-sm text-gray-600">
        Harap isi data dengan benar!
      </p>
    </div>
    @livewire('siswa.form')

  </div>
  <!-- End Card -->
</div>
<!-- End Card Section -->
@endsection