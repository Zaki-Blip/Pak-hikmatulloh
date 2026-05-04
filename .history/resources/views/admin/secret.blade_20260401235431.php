@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto text-center mt-20">

<h1 class="text-4xl font-bold mb-6">🔒 Secret Vault</h1>

<div class="glass p-6 rounded-xl mb-6">
    <p>Only admin can access this area.</p>
</div>

<div class="glass p-6 rounded-xl text-red-300">
    ⚠️ Restricted system access
</div>

</div>

@endsection
