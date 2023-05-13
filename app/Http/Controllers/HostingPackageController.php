<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HostingPackage;

class HostingPackageController extends Controller
{
    public function index()
    {
        $hostingPackages = HostingPackage::all();
        return view('hostingPackages.index', compact('hostingPackages'));
    }

    public function create()
    {
        return view('hostingPackages.create');
    }

    public function store(Request $request)
    {
        // validate request data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // add validations for other fields
        ]);

        // create a new hosting package
        $hostingPackage = HostingPackage::create($request->all());

        return redirect()->route('hostingPackages.show', $hostingPackage);
    }

    public function show(HostingPackage $hostingPackage)
    {
        return view('hostingPackages.show', compact('hostingPackage'));
    }

    public function edit(HostingPackage $hostingPackage)
    {
        return view('hostingPackages.edit', compact('hostingPackage'));
    }

    public function update(Request $request, HostingPackage $hostingPackage)
    {
        // validate request data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            // add validations for other fields
        ]);

        // update the hosting package
        $hostingPackage->update($request->all());

        return redirect()->route('hostingPackages.show', $hostingPackage);
    }

    public function destroy(HostingPackage $hostingPackage)
    {
        $hostingPackage->delete();
        return redirect()->route('hostingPackages.index');
    }
}
