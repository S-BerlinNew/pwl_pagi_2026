<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Transaction::all();
        // return Transaction::with('details')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaction::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('transaction.show', [transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('trasaction.update', [transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
