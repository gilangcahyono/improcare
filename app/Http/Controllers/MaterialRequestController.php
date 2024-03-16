<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MaterialRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MaterialRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::any(['admin', 'sales-manager', 'service-operator', 'operational-manager', 'service-supervisor'])) {
            return abort(403);
        }

        return view('requests.materialrequests', [
            'materialrequests' => MaterialRequest::where('sent', false)->get(),
            'customers' => Customer::all(),
            'products' => Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Gate::any(['admin', 'sales-manager', 'service-operator', 'operatianal-manager', 'service-supervisor'])) {
            return abort(403);
        }

        $product = Product::where('name', $request->productName)->first();

        if ($request->quantity > $product->stock) {
            return back()->with('requestType', $request->requestType)
                ->with('customer', $request->customer)
                ->with('overQty', "Maksimal jumlah $product->stock");
        }

        MaterialRequest::create([
            'request_type' => $request->requestType,
            'user' => $request->user,
            'customer' => $request->customer,
            'barcode' => $product->barcode,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'total' => intval($product->price) * intval($request->quantity),
        ]);

        // $request->session()->

        return to_route('materialrequests.index')
            ->with('success', 'Produk telah ditambahkan!')
            ->with('requestType', $request->requestType)
            ->with('customer', $request->customer);
        // ->withErrors([
        //     'sussess' => 'Produk telah ditambahkan!',
        //     'requestType' => $request->requestType,
        //     'customer' => $request->customer,
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaterialRequest $materialrequest)
    {
        if (!Gate::any(['admin', 'sales-manager'])) {
            return abort(403);
        }

        MaterialRequest::destroy($materialrequest->id);

        return redirect(route('materialrequests.index'))
            ->with('success', 'Produk telah dihapus!');
    }
}
