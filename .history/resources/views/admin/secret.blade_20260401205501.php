@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <h3>🔐 HALAMAN RAHASIA ADMIN</h3>
            </div>
            <div class="card-body">
                <p>Hanya admin yang bisa melihat halaman ini.</p>
                <p class="text-danger">Data super rahasia...</p>
            </div>
        </div>
    </div>
</div>
@endsection
