<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index()
    {
    	$staff = DB::table('staff')->get();
    	return view('index', ['staff' => $staff]);
    }

    public function tambah()
    {
    	return view ('tambah');
    }

    public function store(Request $request)
	{
		DB::table('staff')->insert([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'umur' => $request->umur,
			'alamat' => $request->alamat
		]);
		return redirect('/staff');
	}
}
