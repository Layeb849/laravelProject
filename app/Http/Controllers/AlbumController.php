<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return views('Album.index');
        $data = Album::get();
     return view('Album.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        // $img_url = null;
        $coverImg = $request->coverImg;

if ($request->hasFile('coverImg')) {
    $img = $request->file('coverImg'); 
    $img_name = time() . '.' . $img->getClientOriginalExtension();
    $img->move(public_path('upload/images'), $img_name);
    $coverImg = 'upload/images/' . $img_name;
}

Album::create([
    'name' => $name,
    'coverImg' => $coverImg
]);


        // $name = $request->name;
        // if($request->hasFile('coverImg')){
        //     $img = $request->hasFile('coverImg');
        //     $img_name = time(). '.' . $img->getClientOriginalExtension();
        //     $img->move(public_path('uplode/images'), $img_name);
        //     $img_url = 'uplode/images' . $img_name;
        // }

        // Album::create([
        //     'name' => $name,
        //     'coverImg' => $img_url
        // ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
