@extends('layouts.guest')

@section('content')

<div class="w-full max-w-md p-6 bg-white/5 border border-white/10 rounded-xl">

    <h1 class="text-xl font-semibold mb-6 text-center">
        Login
    </h1>

    @if(session()->has('error'))
        <div class="mb-4 p-3 bg-red-500/10 border border-red-500/30 text-red-300 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <input type="email" name="email" placeholder="Email"
        class="w-full p-3 rounded-lg bg-white/5 border border-white/10">

        <input type="password" name="password" placeholder="Password"
        class="w-full p-3 rounded-lg bg-white/5 border border-white/10">


            Login
        </button>
    </form>

</div>

@endsection
