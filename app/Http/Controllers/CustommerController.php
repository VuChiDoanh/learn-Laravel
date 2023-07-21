<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustommerController extends Controller
{
    public function index(Request $request)
    {

        $title = 'Custommer';
        $custommer = DB::table('custommer')->select('id', 'name', 'email', 'birthday', 'gender', 'image')->get();
        if ($request->post() && $request->search) {
            $custommer = DB::table('custommer')->select('id', 'name', 'email', 'birthday', 'gender', 'image')->where('name', 'like', '%' . $request->search . '%')->get();
        }
        return view('custommer.index', compact('title', 'custommer'));
    }
    public function store(Request $request)
    {
        //validate


        DB::table('custommer')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'image' => $request->image

        ]);

        return redirect()->route('custommer');
    }
    public function add()
    {
        $title = 'Add Custommer';
        return view('custommer.add', compact('title'));
    }
}
