<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::query()->count();
        $studentsCount = Student::query()->count();
        $activeStudents = Student::query()->where('status', 'Aktif')->count();

        return view('admin.dashboard', compact('usersCount', 'studentsCount', 'activeStudents'));
    }
}
