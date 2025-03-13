<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Http\Requests\Admin\Services\StoreServiceRequest;
use App\Http\Requests\Admin\Services\UpdateServiceRequest;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $services = Service::all();
        return view('pages.admin.services.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request): RedirectResponse
    {
        // Procesare imagine
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'images/uploads/services/' . $imageName;
            $image->move(public_path('images/uploads/services'), $imageName);
        }
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->image = $imagePath;
        $service->status = $request->input('status');
        $service->save();

        return redirect()->route('services.index')->with('success', 'Serviciul a fost adăugat cu succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
