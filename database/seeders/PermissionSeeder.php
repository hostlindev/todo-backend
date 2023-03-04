<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                "type" => "read",
                "description" => "Puede visualizar."
            ],
            [
                "type" => "create",
                "description" => "Puede crear, editar y visualizar."
            ],
            [
                "type" => "all",
                "description" => "Puede crear, editar, visualizar y borrar."
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}