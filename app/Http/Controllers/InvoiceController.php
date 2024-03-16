<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\MaterialRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {

        if (!Gate::any(['admin', 'sales-manager', 'service-operator'])) {
            return abort(403);
        }

        if (MaterialRequest::count() > 0) {

            Invoice::create($request->all());

            MaterialRequest::where('sent', false)
                ->update([
                    'sent' => true,
                    'invoice_id' => Invoice::latest()->first()->id,
                ]);

            return redirect(route('materialrequests.index'))
                ->with('success', 'Request berhasil dikirim!');
        }

        return redirect(route('materialrequests.index'));
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

                if (!Gate::any(['admin', 'operational-manager', 'sales-manager', 'service-operator', 'service-supervisor'])) {
                    return abort(403);
                }

                return view('invoices.history', [
                    'invoices' => Invoice::latest()
                        ->where('name', 'like', '%' . request('search') . '%')
                        ->where('done', true)
                        ->where('sent', false)
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

        if ($request->approved) {
            $mr =  MaterialRequest::where('invoice_id', $invoice->id)->get();
            foreach ($mr as $m) {
                // echo $m . '<br><br>';
                Product::where('barcode', $m->barcode)
                    ->update([
                        'stock' => Product::firstWhere('barcode', $m->barcode)->stock - $m->quantity
                    ]);
            }
        }

        $data = [
            'approved' => !$request->approved ? false : $request->approved,
            'approvedBy' => auth()->user()->name,
            'done' => $request->done ? $request->done : true,
            'sent' => $request->sent ? $request->sent : false,
        ];

        Invoice::where('id', $invoice->id)->update($data);

        if ($request->done) return to_route('invoices.show', ['invoice' => 'approval']);

        if ($request->sent) {
            if (!Gate::allows('admin')) {
                return abort(403);
            }
            return to_route('invoices.show', ['invoice' => 'history'])->with('success', 'Barang telah dikirim!');
        }
    }

    public function destroy(Invoice $invoice)
    {
        if (!Gate::allows('admin')) {
            return abort(403);
        }

        $invoice->delete();

        return redirect(route('invoices.show', ['invoice' => 'history']))
            ->with('success', 'Riwayat berhasil dihapus!');
    }
}
