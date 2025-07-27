@extends('homepage.layouts.main')

@section('title', 'Login')

@section('content')
<div>
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs">
        @livewire('login.auth')
    </div>
</div>
@endsection