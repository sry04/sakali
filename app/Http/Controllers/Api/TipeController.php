<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TipeCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipe;

class TipeController extends Controller
{
  public function index()
  {
    return new TipeCollection(Tipe::all());
  }

  public function show($id)
  {
      return Tipe::findOrFail($id);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name'   => 'required|unique:tipes'
      ]);

      return Tipe::create([
          'name' => $request->json('name')
      ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name'   => 'required|unique:tipes'
      ]);

      $cat =  Tipe::findOrFail($id);

      $cat->name = $request->name;
      $cat->save();
      return $cat;
  }

  public function destroy($id)
  {
      $cat =  Tipe::findOrFail($id);

      $cat->delete();

      return response()->json(['success' => true, 'msg' => 'Data Berhasil Dihapus'], 200);
  }
}
