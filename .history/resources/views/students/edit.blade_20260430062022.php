@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <a href="{{ route('students.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-slate-700 mb-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
        </a>
        <h1 class="text-2xl font-bold text-slate-800">Edit Data Siswa</h1>
        <p class="text-slate-500">Perbarui informasi siswa</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
        <form action="{{ route('students.update', $student) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- NIS -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">NIS <span class="text-red-500">*</span></label>
                <input type="text" name="nis" value="{{ $student->nis }}" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition"
                    placeholder="Contoh: 2024001">
                @error('nis')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ $student->name }}" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition"
                    placeholder="Contoh: Ahmad Fauzi">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kelas & Gender -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Kelas</label>
                    <input type="text" name="class" value="{{ $student->class }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition"
                        placeholder="Contoh: X IPA 1">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Gender</label>
                    <select name="gender" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition">
                        <option value="">Pilih</option>
                        <option value="Laki-laki" {{ $student->gender === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $student->gender === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Tanggal Lahir</label>
                <input type="date" name="birthdate" value="{{ $student->birthdate?->format('Y-m-d') }}"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition">
            </div>

            <!-- Telepon -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Nomor Telepon</label>
                <input type="text" name="phone" value="{{ $student->phone }}"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition"
                    placeholder="Contoh: 081234567890">
            </div>

            <!-- Alamat -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Alamat</label>
                <textarea name="address" rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition"
                    placeholder="Alamat lengkap siswa">{{ $student->address }}</textarea>
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                <select name="status" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition">
                    <option value="Aktif" {{ $student->status === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Lulus" {{ $student->status === 'Lulus' ? 'selected' : '' }}>Lulus</option>
                    <option value="Keluar" {{ $student->status === 'Keluar' ? 'selected' : '' }}>Keluar</option>
                </select>
            </div>

            <!-- Submit -->
            <div class="flex gap-3 pt-4">
                <a href="{{ route('students.index') }}"
                    class="flex-1 px-6 py-3 rounded-xl border border-slate-300 text-slate-600 font-medium text-center hover:bg-slate-50 transition">
                    Batal
                </a>
                <button type="submit"
                    class="flex-1 bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-xl font-medium transition shadow-md">
                    Perbarui
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
