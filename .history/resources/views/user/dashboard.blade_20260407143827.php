@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white/5 rounded-xl shadow-sm border border-white/10">

        <!-- HEADER -->
        <div class="text-center py-6">

            <h1 class="text-2xl font-semibold text-gray-200">
                {{ auth()->user()->name }}
            </h1>

            <span class="inline-block mt-2 bg-emerald-500 text-white px-3 py-1 rounded">
                User
            </span>

        </div>

        <hr class="border-white/10">

        <!-- BODY -->
        <div class="text-center py-6">

            <p class="text-gray-400 font-medium">
                Selamat datang di halaman dashboard user.
            </p>

        </div>

    </div>

</div>

@endsection
