<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class ExampleController extends Controller
{
    public function login() {
        return view('login');
    }

    public function receive(Request $request) {
        dd($request->all());
        // print_r($request->input());
    }

    function cv() {
        
        return view('cv');
    }

    function uploadForm() {
        return view('upload');
    }

    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        
        return 'Uploaded';
    }
       function index(){
        return view('index');
       }
    public function test() {
        // dd(Student::find(1)?->phone->phone_number);
        dd(
            DB::table('students')
            ->join('phones', 'phones.id', '=', 'students.phone_id')
            ->where('students.id', '=', 1)
            ->first()
        );
    }    
}
