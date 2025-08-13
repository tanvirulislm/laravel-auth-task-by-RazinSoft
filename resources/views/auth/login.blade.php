@extends('layout.applayout')

@section('title', 'Login')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <label class="block mb-2 font-semibold">Email</label>
            <input type="email" name="email" required class="w-full p-2 border rounded mb-4" value="{{ old('email') }}">
            @error('email')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror

            <!-- Password -->
            <label class="block mb-2 font-semibold">Password</label>
            <input type="password" name="password" required class="w-full p-2 border rounded mb-4">
            @error('password')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
        </form>
        <p class="mt-6 text-center text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register here</a>.
        </p>
    </div>
@endsection