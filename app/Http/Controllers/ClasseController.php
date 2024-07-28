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
        $classes = Classe::get();
        return view('classes',compact('classes'));
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
        
        Classe::create([
            'className' => $request->className,
            'price' => $request->price,
            'capacity' => isset($request->capacity),
            'timeFrom' => $request->timeFrom,
            'timeTo' => $request->timeTo,
        ]);

        return "Data added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = Classe::findOrFail($id);
        return view('class-details', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = Classe::findOrFail($id);
        return view('edit-class', compact('classes'));
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
    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        Classe::where('id',$id)->delete();
        return redirect('classes.index');
    }
}
