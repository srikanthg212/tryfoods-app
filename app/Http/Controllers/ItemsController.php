<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index()
    {
        $items = \App\Models\Item::orderBy('updated_at', 'desc')->get();
        return view('admin.items', compact('items'));
    }
  
    public function items()
    {
        return view('admin/items'); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'itemname' => 'required|string|max:255',
            'itemQty' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            $item = Item::create([
                'itemname' => $request->itemname,
                'itemQty' => $request->itemQty,
            ]);
            return redirect()->route('items.index')->with('success', 'Item created successfully!');
            return response()->json([
                'success' => true,
                'message' => 'Item created successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the item'
            ], 500);
        }
    }

    public function edit($id)
    {
        $item = Item::find($id);
    
        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }
    
        return response()->json([
            'itemname' => $item->itemname,
            'itemQty' => $item->itemQty,
            'id' => $item->id
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $item->itemname = $request->itemname;
        $item->itemQty = $request->itemQty;
        $item->save();

        return response()->json(['success' => true]);
    }

}




