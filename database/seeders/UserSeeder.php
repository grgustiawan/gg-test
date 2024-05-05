<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id_staff' => 1,
                'hak_akses' => 'Admin',
                'status_akun' => 'Aktif',
            ],
            [
                'id_staff' => 2,
                'hak_akses' => 'User',
                'status_akun' => 'Aktif',
            ],
        ];
        foreach ($data as $data) {
            User::create($data);
        }
    }
}
