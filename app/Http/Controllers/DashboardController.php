<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public  function index() {
        return view('dashboard', [
          'user' => Auth::user(),
        ]);
    }

    public function storeUser(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'registration_number' => $request->registration_number,
            'is_student' => $request->has('is_student'),
            'is_staff' => $request->has('is_staff'),
            'is_super_admin' => $request->has('is_super_admin'),
            'password' => Hash::make($request->password),
        ];

        $user = User::create($data);

        return back()->with(['status' => "User '$user->name' has been created successfully"]);
    }


}

