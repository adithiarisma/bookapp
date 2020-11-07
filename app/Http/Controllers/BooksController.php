<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends BaseController
{
    // Menampilkan semua buku
    public function index()
{
  return Book::all();
}

    // Menampilkan detail buku berdasarkan ID
    public function show ($id)
    {
        if ($book = Book::find($id)){
            return response()->json([
            'message' => 'show book by id',
            'data' => $book
            ], 200);
            } 
            else{
    return response()->json([
        'message' => 'book not found'
    ], 404);
    }
    }

    // Menginput Buku Baru
    public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'description' => 'required',
      'author' => 'required'
      ]);

      $book = Book::create(
        $request->only(['title', 'description', 'author'])
      );

      return response()->json([
        'created' => true,
        'data' => $book
      ], 201);
}

    // Memperbarui Buku
    public function update(Request $request, $id)
  {
    try {
      $book = Book::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'message' => 'book not found'
      ], 404);
    }
    $book->fill(
        $request->only(['title', 'description', 'author'])
      );
      $book->save();
  
      return response()->json([
        'updated' => true,
        'data' => $book
      ], 200); 
}

    // Menghapus Buku
    public function destroy($id)
  {
    try {
      $book = Book::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'error' => [
          'message' => 'book not found'
        ]
      ], 404);
    }

    $book->delete();

    return response()->json([
      'deleted' => true
    ], 200);
  }

}