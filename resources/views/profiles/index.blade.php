@extends('layout.applayout')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold tracking-tight text-gray-800 mb-10 text-center">User Profiles</h1>
        
        @if ($profiles->isEmpty())
            <div class="text-center py-20 px-6 bg-white rounded-lg shadow-md">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197M15 11a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <h3 class="mt-2 text-xl font-semibold text-gray-900">No Profiles Found</h3>
                <p class="mt-1 text-base text-gray-500">It looks like there are no user profiles to display at the moment.</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($profiles as $profile)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-2 group">
                        
                        <div class="h-56 overflow-hidden">
                            @if ($profile->profile_image)
                                <img
                                    src="{{ asset('storage/' . $profile->profile_image) }}"
                                    alt="Profile image of {{ $profile->full_name }}"
                                    class="w-full h-full object-cover transform duration-500 ease-in-out group-hover:scale-110"
                                >
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-6 flex flex-col">
                            <h2 class="text-2xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300 truncate" title="{{ $profile->full_name }}">
                                {{ $profile->full_name }}
                            </h2>
                            <div class="mt-4 space-y-3">
                                <div class="flex items-center text-gray-500">
                                    <svg class="h-5 w-5 mr-2 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span class="truncate">{{ $profile->email }}</span>
                                </div>
                                @if($profile->phone)
                                <div class="flex items-center text-gray-500">
                                    <svg class="h-5 w-5 mr-2 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5h-1.5a13.5 13.5 0 01-13.5-13.5v-1.5z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $profile->phone }}</span>
                                </div>
                                @endif
                            </div>
                            <a href="{{ route('profile.show', $profile->id) }}"
                               class="block w-full text-center mt-6 px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition-all duration-300">
                                View Profile
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</div>
@endsection