<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$items = Item::all();

        $items = Cache::remember('items', 5, function () {
            return Item::all();
        });

        return Inertia::render('Items/Index', [
            'items' => $items
        ]);

    }

    /**
     * Display a listing of the resource to Home component.
     */
    public function indexHome()
    {

        $items = Cache::remember('items', 5, function () {
            return Item::all();
        });

        return Inertia::render('Items/Home', [
            'items' => $items
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Items/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'category_name' => 'required',
            'location' => 'required',
            'url' => 'required',
            'image_url' => 'required',
            'description' => 'required',
        ]);
        $item = new Item($request->input());
        $item->save();
        return redirect('items');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return Inertia::render(
            'Items/UpdateItem',
            [
                'item' => $item
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'company_name' => 'required',
            'category_name' => 'required',
            'location' => 'required',
            'url' => 'required',
            'image_url' => 'required',
            'description' => 'required',
        ]);
        $item->company_name = $request->company_name;
        $item->category_name = $request->category_name;
        $item->location = $request->location;
        $item->url = $request->url;
        $item->image_url = $request->image_url;
        $item->description = $request->description;
        $item->save();
        sleep(1);

        return redirect()->route('items.index')->with('message', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        sleep(1);
        return redirect()->route('items.index')->with('message', 'Item deleted successfully');
    }
}
