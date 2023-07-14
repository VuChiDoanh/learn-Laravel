<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';
        $student = DB::table('student')->select('id', 'name', 'email', 'address', 'status')->where('id', '>=', '1')->where('id', '<=', '5')->orWhere('id', '=', '7')->get();
        return view('student.index', compact('title', 'student'));
    }
    public function add()
    {
        $title = 'Add Student';
        return view('student.add', compact('title'));
    }
}
