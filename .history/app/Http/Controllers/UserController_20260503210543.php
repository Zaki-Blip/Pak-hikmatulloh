<?php

namespace App\Http\Controllers;

use App\Models\Student;

class UserController extends Controller
{
    public function index()
    {
        $query = Student::query();

        if (auth()->user()->role !== 'admin') {
            $query->where('user_id', auth()->id());
        }

        $totalStudents = (clone $query)->count();
        $activeStudents = (clone $query)->where('status', 'Aktif')->count();
        $graduatedStudents = (clone $query)->where('status', 'Lulus')->count();
        $graduationRate = $totalStudents > 0 ? round($graduatedStudents / $totalStudents * 100) : 0;

        return view('user.dashboard', compact('totalStudents', 'activeStudents', 'graduationRate'));
    }
}
