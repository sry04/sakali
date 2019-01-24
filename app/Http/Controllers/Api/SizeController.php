<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SizeCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
  public function index()
  {
    return new SizeCollection(Size::all());
  }

  public function show($id)
  {
      return Size::findOrFail($id);
  }

  public function store(Request $request)
  {
      $this->validate($request, [
          'name'   => 'required|unique:sizes'
      ]);

      return Size::create([
          'name' => $request->json('name')
      ]);
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [
          'name'   => 'required|unique:sizes'
      ]);

      $cat =  Size::findOrFail($id);

      $cat->name = $request->name;
      $cat->save();
      return $cat;
  }

  public function destroy($id)
  {
      $cat =  Size::findOrFail($id);

      $cat->delete();

      return response()->json(['success' => true, 'msg' => 'Data Berhasil Dihapus'], 200);
  }
}
