@extends('layout.applayout')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-4xl font-bold mb-6 text-blue-600">Welcome, {{ auth()->user()->name }}!</h1>

        <p class="text-gray-700 mb-8">You are successfully logged in. Use the links below to manage your profile and explore
            the app.</p>

        <div class="flex space-x-4">
            <a href="{{ route('profile.index') }}" class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                View Profiles
            </a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-6 py-3 bg-red-600 text-white rounded hover:bg-red-700 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
@endsection