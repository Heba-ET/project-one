<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-class');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $className = 'programming';
        $price = 54;
        $capacity = true;
        $timeFrom = '03:00';
        $timeTo = '06:00';

        Classe::create([
            'className' => $className,
            'price' => $price,
            'capacity' => $capacity,
            'timeFrom' => $timeFrom,
            'timeTo' => $timeTo,
        ]);

        return "Data added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
