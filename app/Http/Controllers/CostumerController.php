<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;
use App\Http\Requests\RequestStoreOrUpdateCostumer;
use Illuminate\Support\Facades\Hash;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumers = Costumer::orderByDesc('id');
        $costumers = $costumers->paginate(50);

        return view('dashboard.costumers.index', compact('costumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.costumers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateCostumer $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];

        $costumer = Costumer::create($validated);

        return redirect(route('costumers.index'))->with('success', 'Costumer berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Costumer::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $costumer = Costumer::findOrFail($id);

        return view('dashboard.costumers.edit', compact('costumer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateCostumer $request, $id)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $costumer = Costumer::findOrFail($id);

        $costumer->update($validated);

        return redirect(route('costumers.index'))->with('success', 'Costumer berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumer = Costumer::findOrFail($id);
        $costumer->delete();

        return redirect(route('costumers.index'))->with('success', 'Costumer berhasil dihapus.');
    }
}
