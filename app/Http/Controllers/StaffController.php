<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{

    public function index()
    {
        try {
            $staff = Staff::all()->toArray();
            return response()->json($staff, 200);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function store(Request $request){
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

            DB::beginTransaction();
            $staff = Staff::create($request->all());
            DB::commit();
            return response()->json([
                'message' => 'New Staff created!',
                'staff' => $staff,
            ], 201);
        } catch(\Throwable $err){
            DB::rollBack();
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $staff = Staff::whereId($id)->first();
            return response()->json($staff);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $checkStaff = Staff::whereId($id)->first();
            $nik = ($request['nik']) ? $request['nik'] : $checkStaff->nik;
            $nama = ($request['nama']) ? $request['nama'] : $checkStaff->nama;
            $email = ($request['email']) ? $request['email'] : $checkStaff->email;
            $password = ($request['password']) ? $request['passsword'] : $checkStaff->password;
            $telepon = ($request['telepon']) ? $request['telepon'] : $checkStaff->telepon;

            DB::beginTransaction();
            $staff = Staff::whereId($id)->update([
                'nik' => $nik,
                'nama' => $nama,
                'email' => $email,
                'password' => $password,
                'telepon' => $telepon,
            ]);
            DB::commit();
            return response()->json([
                'message' => 'Staff data updated!',
                'staff' => $staff,
            ], 200);
        } catch(\Throwable $err){
            DB::rollBack();
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            Staff::whereId($id)->delete();
            return response()->json([
                'message' => 'Staff data deleted!',
            ], 204);
        } catch(\Throwable $err){
            return response()->json([
                'message' => $err->getMessage()
            ], 500);
        }
    }
}
