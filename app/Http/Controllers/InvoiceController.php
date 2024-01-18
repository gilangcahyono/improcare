<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\MaterialRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class InvoiceController extends Controller
{
    // public function index()
    // {
    //     return Invoice::where('name', 'like', '%' . request('search') . '%')
    //         ->where('approved', false)
    //         ->where('done', false)
    //         ->with('materialrequests')
    //         ->get();
    // }

    public function store(Request $request)
    {

        if (!Gate::any(['admin', 'sales-manager', 'service-operator'])) {
            return abort(403);
        }

        Invoice::create($request->all());

        MaterialRequest::where('sent', false)
            ->update([
                'sent' => true,
                'invoice_id' => Invoice::latest()->first()->id,
            ]);

        return redirect(route('materialrequests.index'))
            ->with('success', 'Request berhasil dikirim!');
    }

    public function show(string $invoice)
    {
        switch ($invoice) {
            case 'approval':
                // $this->authorize('operational-manager');
                if (!Gate::any(['admin', 'operational-manager'])) {
                    return abort(403);
                }
                return view('invoices.approval', [
                    'invoices' => Invoice::latest()
                        ->where('name', 'like', '%' . request('search') . '%')
                        ->where('approved', false)
                        ->where('done', false)
                        ->with('materialrequests')
                        ->simplePaginate(5),
                ]);
                break;
            case 'history':

                if (!Gate::any(['admin', 'operational-manager', 'sales-manager', 'service-operator'])) {
                    return abort(403);
                }

                return view('invoices.history', [
                    'invoices' => Invoice::latest()
                        ->where('name', 'like', '%' . request('search') . '%')
                        ->where('done', true)
                        ->with('materialrequests')
                        ->simplePaginate(5),
                ]);
                break;
            default:
                return abort(404);
                break;
        }
    }

    public function update(Request $request, Invoice $invoice)
    {
        if (!Gate::any(['admin', 'operational-manager'])) {
            return abort(403);
        }

        $data = [
            'approved' => !$request->approved ? false : $request->approved,
            'approvedBy' => auth()->user()->name,
            'done' => $request->done,
        ];

        Invoice::where('id', $invoice->id)->update($data);

        return redirect(route('invoices.show', ['invoice' => 'approval']));
    }
}
