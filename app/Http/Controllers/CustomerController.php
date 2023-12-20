<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.customers', [
            'customers' => Customer::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        Customer::create($request->all());

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    public function update(Request $request, Customer $customer)
    {
        Customer::where('id', $customer->id)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'information' => $request->information,
            ]);

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil diubah!');
    }

    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil dihapus!');
    }
}
