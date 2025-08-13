@extends('layout.applayout')

@section('title', 'Register')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Create Your Account</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <label class="block mb-2 font-semibold" for="name">Name</label>
            <input id="name" name="name" type="text" required value="{{ old('name') }}"
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('name') border-red-500 @enderror" />
            @error('name')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Email -->
            <label class="block mb-2 font-semibold" for="email">Email</label>
            <input id="email" name="email" type="email" required value="{{ old('email') }}"
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('email') border-red-500 @enderror" />
            @error('email')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Password -->
            <label class="block mb-2 font-semibold" for="password">Password</label>
            <input id="password" name="password" type="password" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('password') border-red-500 @enderror" />
            @error('password')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Password Confirmation -->
            <label class="block mb-2 font-semibold" for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required
                class="w-full p-2 border border-gray-300 rounded mb-6" />

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Register
            </button>
        </form>

        <p class="mt-6 text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login here</a>.
        </p>
    </div>
@endsection