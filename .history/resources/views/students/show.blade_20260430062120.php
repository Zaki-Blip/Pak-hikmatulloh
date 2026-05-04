@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx--auto">
    <!-- Header -->
    <div class="mb-6">
        <a href="{{ route('students.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-slate-700 mb-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar
        </a>
        <h1 class="text-2xl font-bold text-slate-800">Detail Siswa</h1>
    </div>

    <!-- Profile Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <!-- Header Banner -->
        <div class="bg-gradient-to-r from-primary-600 to-primary-700 px-6 py-8">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 bg-accent-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    {{ strtoupper(substr($student->name, 0, 1)) }}
                </div>
                <div class="text-white">
                    <h2 class="text-xl font-bold">{{ $student->name }}</h2>
                    <p class="text-primary-100">NIS: {{ $student->nis }}</p>
                </div>
            </div>
        </div>

        <!-- Details -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-slate-500">Kelas</p>
                    <p class="font-medium text-slate-800">{{ $student->class ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-sm text-slate-500">Gender</p>
                    <p class="font-medium text-slate-800">{{ $student->gender ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-sm text-slate-500">Tanggal Lahir</p>
                    <p class="font-medium text-slate-800">{{ $student->birthdate?->format('d F Y') ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-sm text-slate-500">Telepon</p>
                    <p class="font-medium text-slate-800">{{ $student->phone ?? '-' }}</p>
                </div>
                <div class="md:col-span-2">
                    <p class="text-sm text-slate-500">Alamat</p>
                    <p class="font-medium text-slate-800">{{ $student->address ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-sm text-slate-500">Status</p>
                    <p class="mt-1">
                        @if($student->status === 'Aktif')
                            <span class="inline-flex px-3 py-1 text-sm font-medium bg-green-100 text-green-700 rounded-lg">Aktif</span>
                        @elseif($student->status === 'Lulus')
                            <span class="inline-flex px-3 py-1 text-sm font-medium bg-blue-100 text-blue-700 rounded-lg">Lulus</span>
                        @else
                            <span class="inline-flex px-3 py-1 text-sm font-medium bg-red-100 text-red-700 rounded-lg">Keluar</span>
                        @endif
                    </p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-3 mt-8 pt-6 border-t border-slate-200">
                <a href="{{ route('students.edit', $student) }}"
                    class="flex-1 px-6 py-3 bg-accent-500 hover:bg-accent-600 text-white rounded-xl font-medium text-center transition shadow- flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit
                </a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full px-6 py-3 bg-red-500 hover:bg-red-600 text-white rounded-xl font-medium transition shadow-md flex items-center justify-center gap-2"
                        onclick="return confirm('Yakin hapus data siswa ini?')">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
