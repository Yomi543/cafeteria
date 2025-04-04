<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(["name" => "crear_productos"]);
        Permission::create(["name" => "editar_productos"]);
        Permission::create(["name" => "crear_categoria"]);
        Permission::create(["name" => "editar_categoria"]);
        Permission::create(["name" => "realizar_compra"]);
    }
}
