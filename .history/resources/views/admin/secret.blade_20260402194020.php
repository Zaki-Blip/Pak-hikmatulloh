@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto text-center mt-24">

    <h1 class="text-3xl font-semibold mb-6 text-gray-200">
        Secret Vault
    </h1>

    <div class="p-5 rounded-xl bg-white/5 border border-white/10 mb-4">
        <p class="text-gray-400">This area is restricted to administrators only.</p>
    </div>

    <div class="p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
        Unauthorized access is prohibited.
    </div>

</div>

@endsection
