<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengelolaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengelolaanController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengelolaan = Pengelolaan::all();

        return view('admin.pengelolaan.index', compact('pengelolaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengelolaan.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'step' => 'required',
            'manfaat' => 'required',
            'img' => 'required|image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;
        }

        Pengelolaan::create($input);

        return redirect('/admin/pengelolaan')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengelolaan $pengelolaan)
    {
        return view('admin.pengelolaan.edit', compact('pengelolaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengelolaan $pengelolaan)
    {
        $request->validate([
            'name' => 'required',
            'step' => 'required',
            'manfaat' => 'required',
            'img' => 'required|image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;

            $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $pengelolaan->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['img']);
        }

        $pengelolaan->update($input);

        return redirect('/admin/pengelolaan')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengelolaan $pengelolaan)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $pengelolaan->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        $pengelolaan->delete();
        return redirect('/admin/pengelolaan')->with('message', 'Data berhasil dihapus');
    }
}
