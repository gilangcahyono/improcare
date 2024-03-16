<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{
    public function index()
    {
        if (!Gate::allows(['admin'])) {
            return abort(403);
        }

        return view('customers.customers', [
            'customers' => Customer::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        if (!Gate::allows(['admin'])) {
            return abort(403);
        }

        Customer::create($request->all());

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    public function update(Request $request, Customer $customer)
    {
        if (!Gate::allows(['admin'])) {
            return abort(403);
        }

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
        if (!Gate::allows(['admin'])) {
            return abort(403);
        }

        Customer::destroy($customer->id);

        return redirect(route('customers.index'))
            ->with('success', 'Pelanggan berhasil dihapus!');
    }
}
