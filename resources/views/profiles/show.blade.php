@extends('layout.applayout')

@section('title', 'Profile Details')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-3xl font-bold mb-6 text-blue-600 text-center">Profile Details</h1>

        <div class="flex flex-col items-center space-y-6">
            <!-- Profile Image -->
            <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="{{ $profile->full_name }}"
                class="w-48 h-48 rounded-full object-cover border-4 border-blue-600 shadow-md" />

            <!-- Info -->
            <div class="w-full max-w-xl">
                <p><span class="font-semibold">Full Name:</span> {{ $profile->full_name }}</p>
                <p><span class="font-semibold">Email:</span> {{ $profile->email }}</p>
                <p><span class="font-semibold">Phone:</span> {{ $profile->phone }}</p>
                <p><span class="font-semibold">Address:</span> {{ $profile->address }}</p>
                <p><span class="font-semibold">Bio:</span> {{ $profile->bio }}</p>
                <p><span class="font-semibold">Hobbies:</span> {{ $profile->hobbies }}</p>
                <p><span class="font-semibold">Date of Birth:</span>
                    {{ \Carbon\Carbon::parse($profile->date_of_birth)->format('F j, Y') }}</p>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('dashboard') }}"
                class="inline-block px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Back to Dashboard
            </a>
        </div>
    </div>
@endsection