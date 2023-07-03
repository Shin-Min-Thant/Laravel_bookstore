<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\productDataformRequest;
use Illuminate\Http\Request;
use Storage;
use App\Models\products;

class productsController extends Controller
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
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productDataformRequest $request)
    {

        $files = $request->file('file');
        $fileary = [];
        foreach($files as $file){
            $filename = uniqid() . "-" . $file->getClientOriginalName();
            array_push($fileary,$filename);
            $file->move(public_path('uploads'),$filename);
        }
             products::create([
            'title'=>$request->title,
            'imgs'=>serialize($fileary),
            'price'=>$request->price,
            'description'=>$request->description

        ]);
        return redirect('/create')->with('status','Successfully Data Insert');


        // return $request->all();
    //     $file = $request->file('file');
    //     $filename = uniqid()."-".$file->getClientOriginalName();
    //     $file->move(public_path() . "/uploads/" , $filename);
    //     // $data['file'] = $filename;

    //     return redirect('/create')->with('status','Successfully Data Insert');


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
