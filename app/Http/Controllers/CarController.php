<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('addCar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //  logic to upload image in public/assets/images
        $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required'
        ]);
        
        $data['image'] = $this->uploadFile($request->image, 'assets/images');
        $data['published'] = isset($request->published);
        Car::create($data);
        
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('carDetails', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);

       // $category = Category::find(Input::get('id'));
        $categories = Category::all();
       // $cats = array();
       // foreach($categories as $category){
        // $cats[$category->id] = $category->category_name;
        
        return view('edit-car', compact('car'))->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images');
        }
        $data['published'] = isset($request->published);
        
        Car::where('id', $id)->update($data);
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        // softDelete
        Car::where('id', $id)->delete();
        return redirect()->route('cars.index');
    }

    public function showDeleted() {
        $cars =  Car::onlyTrashed()->get();

        return view('trashedCars', compact('cars'));
    }

    public function restore(string $id) {
        Car::where('id', $id)->restore();
        return redirect()->route('cars.showDeleted');
    }

    public function forceDelete(string $id) {
        Car::where('id', $id)->forceDelete();
        return redirect()->route('cars.index');
    }


    
}
        
    

