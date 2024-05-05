<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        try {
            $validated = Validator::make($request->all(), [
                'nik' => 'required|string|max:5',
                'nama' => 'required|string|max:50',
                'email' => 'required|email|unique:staff,email',
                'password' => 'required|min:8',
                'telepon' => 'required|string',
            ]);

            if($validated->fails()){
                return response()->json([
                    'message' => 'Bad request',
                    'errors' => $validated->errors()
                ], 400);
            }

            $staff = Staff::create($request->all());
            $token = $staff->createToken('API TOKEN')->plainTextToken;

            return response()->json([
                'staff' => $staff,
                'token' => $token,
            ], 201);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function login(Request $request){
        try {
            $validated = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            if($validated->fails()){
                return response()->json([
                    'message' => 'Bad request',
                    'errors' => $validated->errors()
                ], 400);
            }

            $staff = Staff::where('email', $request['email'])->first();

            if(!$staff || !Hash::check($request['password'], $staff->password)){
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }

            $user = User::where('id_staff', $staff->id)->first();

            if(!$user || $user->status_akun !== 'Aktif'){
                return response()->json([
                    'message' => 'Status akun tidak aktif'
                ], 406);
            }

            $token = $staff->createToken('API TOKEN')->plainTextToken;

            return response()->json([
                'staff' => $staff,
                'token' => $token,
            ]);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request){
        try {
            auth()->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'User logout successfully'
            ], 204);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }
}
