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
        
        $data = $request->validate([
            'className' => 'required|string',
            'price' => 'required',
            'timeFrom' => 'required',
            'timeTo' => 'required',
        ]);
          $data['capacity'] = isset($request->capacity);
          Classe::create($data);
          return redirect()->route('classes.index');
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
        $data = $request->validate([
            'className' => 'required|string',
            'price' => 'required',
            'timeFrom' => 'required',
            'timeTo' => 'required',
        ]);
          $data['capacity'] = isset($request->capacity);
          Classe::where('id', $id)->update($data);
          return redirect()->route('classes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $id = $request->id;
        Classe::where('id',$id)->delete();
        return redirect()->route('classes.index');
    }
    public function showDeleted() {
        $classes =  Classe::onlyTrashed()->get();

        return view('trashedClasses', compact('classes'));
    }

    public function restore(string $id) {
        Classe::where('id', $id)->restore();
        return redirect()->route('classes.showDeleted');
    }

    public function forceDelete(string $id) {
        Classe::where('id', $id)->forceDelete();
        return redirect()->route('classes.index');
    }
}
