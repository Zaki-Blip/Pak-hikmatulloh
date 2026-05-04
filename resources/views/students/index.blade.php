@extends('layouts.app')

@section('content')

<div class="space-y-4">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Data Siswa</h1>
            <p class="text-slate-500">Kelola data siswa sekolah</p>
        </div>
        <a href="{{ route('students.create') }}"
            class="inline-flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-xl font-medium transition shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Siswa
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-500 uppercase">NIS</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Nama</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Kelas</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Gender</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Status</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-slate-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse($students as $student)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 text-sm font-mono text-slate-600">{{ $student->nis }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-slate-800">{{ $student->name }}</td>
                            <td class="px-4 py-3 text-sm text-slate-600">{{ $student->class ?? '-' }}</td>
                            <td class="px-4 py-3 text-sm text-slate-600">{{ $student->gender ?? '-' }}</td>
                            <td class="px-4 py-3">
                                @if($student->status === 'Aktif')
                                    <span class="inline-flex px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-lg">Aktif</span>
                                @elseif($student->status === 'Lulus')
                                    <span class="inline-flex px-2 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-lg">Lulus</span>
                                @else
                                    <span class="inline-flex px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-lg">Keluar</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-right">
                                <div class="inline-flex items-center gap-2">
                                    <a href="{{ route('students.show', $student) }}"
                                        class="p-2 text-slate-400 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition"
                                        title="Lihat">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ route('students.edit', $student) }}"
                                        class="p-2 text-slate-400 hover:text-accent-600 hover:bg-accent-50 rounded-lg transition"
                                        title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                            title="Hapus"
                                            onclick="return confirm('Yakin hapus data siswa ini?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-8 text-center text-slate-500">
                                <svg class="w-12 h-12 mx-auto mb-3 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16l3.84-7.84L12 4l-7.84 2.16L6.16 14z"></path>
                                </svg>
                                <p>Belum ada data siswa.</p>
                                <a href="{{ route('students.create') }}" class="text-primary-600 hover:underline">Tambah siswa pertama</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($students->hasPages())
            <div class="px-4 py-3 border-t border-slate-200 bg-slate-50">
                {{ $students->links() }}
            </div>
        @endif
    </div>
</div>

@endsection
