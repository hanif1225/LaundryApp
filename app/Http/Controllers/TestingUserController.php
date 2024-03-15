<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class TestingUserController extends Controller
{
    public function index()
    {
        return view('management_users.index');
    }

    public function store(Request $request)
    {
        // $file = $request->file('picture');
        // $fileName = time() . '.' . $file->getClientOriginalExtension();
        // $file->storeAs('public/images_user', $fileName); //php artisan storage:link
        $empData = [
            'name' => $request->name, 
            'role' => '2', 
            'username' => $request->username, 
            'no_hp' => $request->no_hp, 
            'address' => $request->address, 
            'email' => $request->email, 
            'password' => $request->password, 
            'picture' => $request->picture,
        ];
        User::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

}
