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

    <form>
      <!-- Section -->
      <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
        <label for="af-payment-billing-contact" class="inline-block text-sm font-medium">
            Nama Lengkap
        </label>
        <div class="mt-1 mb-2 space-y-3">
          <input id="af-payment-billing-contact" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="First Name">
        </div>

        <label for="af-payment-billing-contact" class="inline-block text-sm font-medium">
            NIS
        </label>
        <div class="mt-1 mb-2 space-y-3">
          <input id="af-payment-billing-contact" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="First Name">
        </div>

        <label for="af-payment-billing-contact" class="inline-block text-sm font-medium">
            Kelas
        </label>
        <div class="mt-1 space-y-3">
            <select class="py-1.5 sm:py-2 px-3 pe-9 block w-full border border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            <option selected>Kelas</option>
              <option>City 1</option>
              <option>City 2</option>
              <option>City 3</option>
            </select>
        </div>
      </div>
      <!-- End Section -->
    </form>

    <div class="mt-5 flex justify-end gap-x-2">
        <a href="{{ route('siswa.index') }}" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
            Cancel
        </a>
        <a href="" class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Submit
        </a>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Card Section -->
@endsection