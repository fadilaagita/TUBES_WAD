<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    protected $model;
    public function __construct(Karyawan $karyawan)
    {
        $this->model = $karyawan;
    }

    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.karyawan.index', compact('karyawan'));
    }
}
