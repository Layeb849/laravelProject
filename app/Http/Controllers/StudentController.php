<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|min:10|max:20',
            'img' => 'required|image|file|max:1024|mimes:,webp'
        ]);
        Student::create([
            'name'=> $request->name
        ]);

    }
}
