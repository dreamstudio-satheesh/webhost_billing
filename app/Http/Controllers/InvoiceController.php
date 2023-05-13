<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        // validate request data
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            // add validations for other fields
        ]);

        // create a new invoice
        $invoice = Invoice::create($request->all());

        return redirect()->route('invoices.show', $invoice);
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        // validate request data
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            // add validations for other fields
        ]);

        // update the invoice
        $invoice->update($request->all());

        return redirect()->route('invoices.show', $invoice);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
