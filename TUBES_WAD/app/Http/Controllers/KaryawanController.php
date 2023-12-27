<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

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

    public function create()
    {
        return view('admin.karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required|unique:karyawan',
            'alamat' => 'required|date',
            'no_telpr' => 'required',
            'email' => 'required|unique:karyawan',
            'shift' => 'required'
        ]);

        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'shift' => $request->shift
        ]);

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required|unique:karyawan',
            'alamat' => 'required|date',
            'no_telpr' => 'required',
            'email' => 'required|unique:karyawan',
            'shift' => 'required'
        ]);
        $karyawan = Karyawan::find($id);

        if (!$karyawan) {
            return redirect()->route('admin.karyawan.index')->with('error', 'Karyawan Tidak ditemukan.');
        }
        
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_telp = $request->no_telp;
        $karyawan->email = $request->email;
        $karyawan->shift = $request->shift;
        $karyawan->save();

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }

    
}
