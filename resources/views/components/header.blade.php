<header class="bg-white shadow">
    <nav class="container mx-auto flex justify-between items-center p-4">
        <a href="{{ route('dashboard') }}" class="font-bold text-xl text-blue-600">RazinSoft</a>
        <div>
            @auth
                @if(auth()->user()->profile)
                    <a href="{{ route('profile.show') }}" class="mr-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded border-0">My Profile</a>
                @else
                    <a href="{{ route('profile.create') }}" class="mr-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded border-0">Create Profile</a>
                @endif
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-700 px-4 py-1.5 rounded border-0">Logout</button>

                </form>
            @else
                <a href="{{ route('login') }}" class="mr-4 text-gray-700 hover:text-blue-600">Login</a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
            @endauth
        </div>
    </nav>
</header>