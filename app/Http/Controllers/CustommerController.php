<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustommerController extends Controller
{
    public function index()
    {
        $title = 'Custommer';
        $custommer = DB::table('custommer')->select('id', 'name', 'email', 'birthday', 'gender')->get();
        return view('custommer.index', compact('title', 'custommer'));
    }
    public function add()
    {
        $title = 'Add Custommer';
        return view('custommer.add', compact('title'));
    }
}
