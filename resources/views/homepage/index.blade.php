@extends('homepage.layouts.main')

@section('title', 'Homepage')

@section('content')
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @livewire('table')
</div>
<!-- End Table Section -->
@endsection