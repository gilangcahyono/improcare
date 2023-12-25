<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\MaterialRequest;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {
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
        if ($invoice === 'approval') {
            return view('invoices.approval', [
                'invoices' => Invoice::where('name', 'like', '%' . request('search') . '%')
                    ->where('approved', false)
                    ->where('done', false)
                    ->with('materialrequests')
                    ->simplePaginate(5),
            ]);
        }

        if ($invoice === 'history') {
            return view('invoices.history', [
                'invoices' => Invoice::where('name', 'like', '%' . request('search') . '%')
                    ->where('done', true)
                    ->with('materialrequests')
                    ->simplePaginate(5),
            ]);
        }
    }

    public function update(Request $request, Invoice $invoice)
    {
        $data = [
            'approved' => !$request->approved ? false : $request->approved,
            'done' => $request->done,
        ];

        Invoice::where('id', $invoice->id)->update($data);

        return redirect(route('invoices.show', ['invoice' => 'approval']));
    }
}
