<?php

namespace App\Http\Controllers\Api;

// use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class KategoriController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|unique:categories'
        ]);

        return Category::create([
            'name' => $request->json('name'),

        ]); 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required|unique:categories'
        ]);

        $cat =  Category::findOrFail($id);
        
        $cat->name = $request->name;
        $cat->save();   
        return $cat;
    }

    public function destroy($id)
    {
        $cat =  Category::findOrFail($id);

        $cat->delete();

        return response()->json(['success' => true, 'msg' => 'Data Berhasil Dihapus'], 200);
    }
}
