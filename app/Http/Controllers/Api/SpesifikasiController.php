<?php

namespace App\Http\Controllers\Api;

use App\Models\Spesification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SpesifikasiController extends Controller
{
  public function index()
  {
      return Spesification::all();
  }

  public function show($id)
  {
      return Spesification::findOrFail($id);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name'   => 'required|unique:tipes'
      ]);

      return Spesification::create([
          'name' => $request->json('name'),

      ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name'   => 'required|unique:tipes'
      ]);

      $cat =  Spesification::findOrFail($id);

      $cat->name = $request->name;
      $cat->save();
      return $cat;
  }

  public function destroy($id)
  {
      $cat =  Spesification::findOrFail($id);

      $cat->delete();

      return response()->json(['success' => true, 'msg' => 'Data Berhasil Dihapus'], 200);
  }
}
