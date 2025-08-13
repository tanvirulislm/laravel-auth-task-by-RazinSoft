@extends('layout.applayout')

@section('title', 'Create Profile')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-3xl font-bold mb-6 text-blue-600 text-center">Create Your Profile</h1>

        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Full Name -->
            <label for="full_name" class="block mb-2 font-semibold">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('full_name') border-red-500 @enderror">
            @error('full_name')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Email -->
            <label for="email" class="block mb-2 font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Phone -->
            <label for="phone" class="block mb-2 font-semibold">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('phone') border-red-500 @enderror">
            @error('phone')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Address -->
            <label for="address" class="block mb-2 font-semibold">Address</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('address') border-red-500 @enderror">
            @error('address')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Bio -->
            <label for="bio" class="block mb-2 font-semibold">Bio</label>
            <textarea name="bio" id="bio" rows="4" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('bio') border-red-500 @enderror">{{ old('bio') }}</textarea>
            @error('bio')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Profile Image -->
            <label for="profile_image" class="block mb-2 font-semibold">Profile Image (jpg, png, max 2MB)</label>
            <input type="file" name="profile_image" id="profile_image" accept="image/jpeg,image/png" required
                class="w-full mb-4 @error('profile_image') border-red-500 @enderror">
            @error('profile_image')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Hobbies -->
            <label for="hobbies" class="block mb-2 font-semibold">Hobbies</label>
            <input type="text" name="hobbies" id="hobbies" value="{{ old('hobbies') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-4 @error('hobbies') border-red-500 @enderror">
            @error('hobbies')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <!-- Date of Birth -->
            <label for="date_of_birth" class="block mb-2 font-semibold">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required
                class="w-full p-2 border border-gray-300 rounded mb-6 @error('date_of_birth') border-red-500 @enderror">
            @error('date_of_birth')
                <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">
                Submit Profile
            </button>
        </form>
    </div>
@endsection