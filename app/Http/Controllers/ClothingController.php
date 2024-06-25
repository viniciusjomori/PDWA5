<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothing;

class ClothingController extends Controller
{
    public function index() {
        $clothings = Clothing::all();
    
        return view('clothing.index', ['clothings' => $clothings]);
    }
    
    public function create() {
        return view('clothing.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'material' => 'required',
            'brand' => 'required',
            'size' => 'required|numeric'
        ]);
    
        $newClothing = Clothing::create($data);
    
        return redirect((route('clothing.index')));
    }
    
    public function edit(Clothing $clothing) {
        return view('clothing.edit', ['clothing' => $clothing]);
    }
    
    public function update(Clothing $clothing, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'material' => 'required',
            'brand' => 'required',
            'size' => 'required|numeric'
        ]);
    
        $clothing->update($data);
    
        return redirect(route('clothing.index'))->with('success', 'Clothing Updated Successfully');
    }
    
    public function delete(Clothing $clothing) {
        $clothing->delete();
        return redirect(route('clothing.index'))->with('success', 'Clothing Deleted Successfully');
    }

    public function xml() {
        $clothings = Clothing::all();
    
        return response()->view('clothing.xml', ['clothings' => $clothings])->header('Content-Type', 'application/xml');
    }
    
}
