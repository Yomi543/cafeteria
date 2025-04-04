<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where("name", "administrador")->first();
        $role->givePermissionTo([
            "crear_productos",
            "editar_productos",
            "crear_categoria",
            "editar_categoria",
        ]);

        $role = Role::where("name", "cliente")->first();
        $role->givePermissionTo([
            "realizar_compra",

        ]);


    }
}
