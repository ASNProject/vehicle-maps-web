<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('name', $request->name)->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Username tidak ditemukan',
            ], 404);
        }

        // Check password
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Password salah',
            ], 401);
        }

        // Login Success
        return response()->json([
            'status' => true,
            'message' => 'Login berhasil',
            'data' => $user,
        ], 200);
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|unique:users,name',
            'password' => 'required|string',
            'email'    => 'nullable|email|unique:users,email',
        ]);

        // Simpan user
        $user = User::create([
            'name' => $request->username,
            'password' => bcrypt($request->password),
            'name'     => $request->name,
            'email'    => $request->email,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registrasi berhasil',
            'data' => $user
        ], 201);
    }

}
