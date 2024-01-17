<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TanamanController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanaman = Tanaman::all();

        return view('admin.tanaman.index', compact('tanaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tanaman.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'istilah' => 'required',
            'penjelasan' => 'required',
            'img' => 'required|image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;
        }

        Tanaman::create($input);

        return redirect('/admin/tanaman')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanaman $tanaman)
    {
        return view('admin.tanaman.edit', compact('tanaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanaman $tanaman)
    {
        $request->validate([
            'name' => 'required',
            'istilah' => 'required',
            'penjelasan' => 'required',
            'img' => 'image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;

            $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $tanaman->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['img']);
        }

        $tanaman->update($input);

        return redirect('/admin/tanaman')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanaman $tanaman)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $tanaman->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        $tanaman->delete();
        return redirect('/admin/tanaman')->with('message', 'Data berhasil dihapus');
    }
}
