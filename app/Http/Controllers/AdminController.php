<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'name'=>'required|max:100|min:5',
        'user_name'=>'required|max:100|min:5',
        'email' => 'required|unique:users|email',
        'city'=>'required|max:30',
        'password' => 'required|min:4',
       ]
       );
       $data['agree']=isset($request->agree);
       Admin::create($data);
       return 'enterd';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
