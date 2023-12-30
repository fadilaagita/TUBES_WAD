<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //
    protected $model;
    public function __construct(Kategori $kategori)
    {
        $this->model = $kategori;
    }

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:categories',
        ]);
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect()->route('kategori.index')->with('Success','Congrats Your Parents Are Proud Of You');
    }

    public function edit($id){
        $kategori  = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_kategori' => 'required|unique:categories',
        ]);

        $kategori = Kategori::find($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect()->route('kategori.index')->with('Success', 'Congrats another failure make');

    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('Success', 'Congrats this is the only thing you can do is to delete');
    }
}
