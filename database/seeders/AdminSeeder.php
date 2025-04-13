<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'=>"Administrador",
            'email'=>"yomigalicia@gmail.com",
            'password'=>Hash::make("Admin1"),
        ]);
        $user->assignRole("administrador");

        $user = User::create([
            'name'=>"Administrador2",
            'email'=>"yomimonsterr@gmail.com",
            'password'=>Hash::make("Admin2"),
        ]);
        $user->assignRole("administrador");
    }
}
