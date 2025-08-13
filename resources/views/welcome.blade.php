@extends('layout.applayout')

@section('title', 'Welcome')

@section('content')
    <div class="flex items-center justify-center">
        <div class=" p-10 max-w-lg text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Welcome to RazinSoft!</h1>
            <p class="text-gray-700 mb-6">Your journey to becoming a web dev superstar starts here. Let's build awesome
                things together!</p>
            <a href="{{ route('login') }}"
                class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Login</a>
            <a href="{{ route('register') }}"
                class="inline-block px-6 py-3 ml-4 border border-blue-600 text-blue-600 rounded-lg font-semibold hover:bg-blue-100 transition">Register</a>
        </div>
    </div>
@endsection