<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';
        $name = "Vu Thi C";
        $student = DB::table('student')->select('id', 'name', 'email', 'address', 'status')->where('id', '>=', '1')->where('id', '<=', '5')->orWhere('id', '=', '7')->get();
        return view('student.index', compact('title', 'name', 'student'));
    }
}
