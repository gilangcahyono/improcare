<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MaterialRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class MaterialRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('requests.materialrequests', [
            'materialrequests' => MaterialRequest::where('sent', false)->get(),
            'customers' => Customer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::where('barcode', $request->barcode)->first();

        MaterialRequest::create([
            'request_type' => $request->requestType,
            'user' => $request->user,
            'customer' => $request->customer,
            'barcode' => $request->barcode,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'total' => intval($product->price) * intval($request->quantity),
        ]);

        return redirect(route('materialrequests.index'))
            ->with('success', 'Produk telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MaterialRequest $materialRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaterialRequest $materialRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaterialRequest $materialRequests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaterialRequest $materialrequest)
    {
        MaterialRequest::destroy($materialrequest->id);

        return redirect(route('materialrequests.index'))
            ->with('success', 'Produk telah dihapus!');
    }
}
