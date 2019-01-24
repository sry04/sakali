<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ColourCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colour;

class ColourController extends Controller
{
  public function index()
  {
    return new ColourCollection(Colour::all());
  }

  public function show($id)
  {
      return Colour::findOrFail($id);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name'   => 'required|unique:colours',
          'color'   => 'required'
      ]);

      return Colour::create([
          'name' => $request->json('name'),
          'color' => $request->json('color')
      ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name'   => 'required|unique:colours',
          'color'   => 'required'
      ]);

      $cat =  Colour::findOrFail($id);

      $cat->name = $request->name;
      $cat->color = $request->color;

      $cat->save();
      return $cat;
  }

  public function destroy($id)
  {
      $cat =  Colour::findOrFail($id);

      $cat->delete();

      return response()->json(['success' => true, 'msg' => 'Data Berhasil Dihapus'], 200);
  }
}
