<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.customers', [
            'customers' => Customer::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'information' => ['required', 'string'],
        ]);

        Customer::create($validatedData);

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    public function update(Request $request, Customer $customer)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'information' => ['required', 'string'],
        ]);

        Customer::where('id', $customer->id)->update($validatedData);

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
