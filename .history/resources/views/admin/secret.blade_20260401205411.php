@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3>🏠 User Dashboard</h3>
            </div>
            <div class="card-body">
                <h4>Selamat datang, {{ auth()->user()->name }}!</h4>
                <p>Anda login sebagai user biasa.</p>
            </div>
        </div>
    </div>
</div>
@endsection
