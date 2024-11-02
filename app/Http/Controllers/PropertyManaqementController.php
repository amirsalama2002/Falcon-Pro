<?php

namespace App\Http\Controllers;

use App\Models\PropertyManaqement;
use Illuminate\Http\Request;

class PropertyManaqementController extends Controller
{
    
    public function index()
    {
        //
        $na = PropertyManaqement::all();
        return view('PropertyManaqement.index')
        ->with('mo',$na);
    }

   
    public function create()
    {
        return view('PropertyManaqement.create');
    }

    
    public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'buildingname' => 'required',
            'property' => 'required',
            'type' => 'required',
            'model' => 'required',
            'category' => 'required',
            'priceform' => 'required',
            'topriceform' => 'required',
            'size' => 'required',
            'tosize' => 'required',
            'status' => 'required',
            'view' => 'required',
            'feature' => 'required'
        ]);
        PropertyManaqement::create($vaildet);
        return redirect()->route('PropertyManaqement.index');
    }

    
    public function show(PropertyManaqement $propertyManaqement)
    {
        //
    }

    
    public function edit(PropertyManaqement $propertyManaqement)
    {
        //
        return view('PropertyManaqement.edit');
    }

  
    public function update(Request $request, PropertyManaqement $propertyManaqement)
    {
        //
        $vaildet = $request->validate([
            'buildingname' => 'required',
            'property' => 'required',
            'type' => 'required',
            'model' => 'required',
            'category' => 'required',
            'priceform' => 'required',
            'topriceform' => 'required',
            'size' => 'required',
            'tosize' => 'required',
            'status' => 'required',
            'view' => 'required',
            'feature' => 'required',
        ]);
        $propertyManaqement->update($vaildet);
        return redirect()->route('PropertyManaqement.index');
    
    }

    
    public function destroy(PropertyManaqement $propertyManaqement)
    {
        //
        $propertyManaqement->delete();
        return redirect()->route('PropertyManaqement.index');
    }
}
