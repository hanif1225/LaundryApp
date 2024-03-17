<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use App\Models\User;


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
        $file = $request->file('picture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images_user', $fileName); //php artisan storage:link
        $empData = [
            'name' => $request->fname, 
            'role' => 'customer', 
            'username' => $request->fusername, 
            'no_hp' => $request->fno_hp, 
            'address' => $request->faddress, 
            'email' => $request->femail, 
            'password' => $request->fpassword, 
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
