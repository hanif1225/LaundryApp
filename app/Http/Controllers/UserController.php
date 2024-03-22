<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //return view('management_users.index');
    //     return view('layouts.main2');
    // }

    public function index()
    {
        return view('management_users.index');
    }

    public function dataTable()
    {
        return DataTables::of(User::limit(10))->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validateDate   =  $request->validate([
            'name'      => 'required|max:255',
            'username'  => 'required|unique:users',
            'no_hp'     => 'required',
            'address'   => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8',
            'picture'   => 'required|mimes:png,jpg,jpeg,svg|max:2500', 
        ],
        [
            'username.unique'   => "Someone already uses the username",
            'email.unique'      => "Someone already uses email",
            'picture.max'       => 'Maximum image size 2,5 MB',
            'picture.mimes'     => 'Images must be in PNG, JPG, JPEG dan SVG format!', 
        ]);

        $file = $request->file('picture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images_user', $fileName); //php artisan storage:link
        
            $empData = [
                'name' => $request->name, 
                'role' => 'customer', 
                'username' => $request->username, 
                'no_hp' => $request->no_hp, 
                'address' => $request->address, 
                'email' => $request->email, 
                'password' => $request->password, 
                'picture' => $fileName,
            ];
            User::create($empData);
            return response()->json([
                'status' => 200,
            ]);
        
    }

    /**
     * Display the specified resource.
     */
    //public function show(string $id)
    public function show(Request $request)
    {   
        $id = $request->id;
        $data = User::find($id);
        return response()->json($data);
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
    //public function destroy(string $id)
    public function destroy(Request $request)
    {
        $id = $request->id;
        $data = User::find($id);
        if (Storage::delete('public/images_user/' . $data->picture)) {
            User::destroy($id);
        }
    }
}