<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        $data = siswa::all();
        return view("page/screens")->with('database', $data);
    }

    function index2()
    {
        return view("page/screens2");
    }

    function detail($id, $nama)
    {
        return "Saya siswa detail dari controller dengan ID : $id";
    }

    function post()
    {
    }
}
