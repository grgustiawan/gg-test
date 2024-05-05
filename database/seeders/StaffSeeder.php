<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '11011',
                'nama' => 'Galih',
                'email' => 'galih@mail.com',
                'password' => 'goldgym123',
                'telepon' => '0217336634'
            ],
            [
                'nik' => '11012',
                'nama' => 'Raka',
                'email' => 'raka@mail.com',
                'password' => 'goldgym123',
                'telepon' => '0217336635'
            ],
        ];
        foreach ($data as $data) {
            Staff::create($data);
        }
    }
}
