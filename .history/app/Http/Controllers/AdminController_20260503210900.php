<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $studentsCount = Student::count();
        $activeStudents = Student::where('status', 'Aktif')->count();

        return view('admin.dashboard', compact('usersCount', 'studentsCount', 'activeStudents'));
    }
}
