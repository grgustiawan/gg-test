<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        try {
            $user = User::all()->toArray();
            return response()->json($user, 200);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'id_staff' => 'required',
                'hak_akses' => 'required|string|max:20',
                'status_akun' => 'required|string|max:20',
            ]);

            if($validated->fails()){
                return response()->json([
                    'message' => 'Bad request',
                    'errors' => $validated->errors()
                ], 400);
            }

            $user = User::create($request->all());
            return response()->json([
                'message' => 'New User created!',
                'user' => $user,
            ], 201);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $user = User::whereId($id)->first();
            return response()->json($user);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        try {
            $staff = User::whereId($id)->update($request->all());
            return response()->json([
                'message' => 'User data updated!',
                'staff' => $staff,
            ], 200);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }


    public function destroy(string $id)
    {
        try {
            User::whereId($id)->delete();
            return response()->json([
                'message' => 'User data deleted!',
            ], 204);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }
}
