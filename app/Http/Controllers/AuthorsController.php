<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends BaseController
{
    // Menampilkan semua authors
    public function index()
{
  return Authors::all();
}

    // Menampilkan detail authors berdasarkan ID
    public function show ($id)
    {
        if ($authors = Authors::find($id)){
            return response()->json([
            'message' => 'show author by id',
            'data' => $authors
            ], 200);
            } 
            else{
    return response()->json([
        'message' => 'author not found'
    ], 404);
    }
    }

    // Menginput Buku Baru
    public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'gender' => 'required',
      'biography' => 'required'
      ]);

      $authors = Authors::create(
        $request->only(['name', 'gender', 'biography'])
      );

      return response()->json([
        'created' => true,
        'data' => $authors
      ], 201);
}

    // Memperbarui Buku
    public function update(Request $request, $id)
  {
    try {
      $authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'message' => 'author not found'
      ], 404);
    }
    $authors->fill(
        $request->only(['name', 'gender', 'biography'])
      );
      $authors->save();
  
      return response()->json([
        'updated' => true,
        'data' => $authors
      ], 200); 
}

    // Menghapus Buku
    public function destroy($id)
  {
    try {
      $authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'error' => [
          'message' => 'author not found'
        ]
      ], 404);
    }

    $authors->delete();

    return response()->json([
      'deleted' => true
    ], 200);
  }
}