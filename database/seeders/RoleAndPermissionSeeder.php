<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear permisos
         Permission::create(['name' => 'manage schools']);
         Permission::create(['name' => 'manage classrooms']);
         Permission::create(['name' => 'make reservations']);
 
         // Crear roles y asignar permisos
         $adminRole = Role::create(['name' => 'admin']);
         $adminRole->givePermissionTo(['manage schools', 'manage classrooms', 'make reservations']);
 
         $userRole = Role::create(['name' => 'user']);
         $userRole->givePermissionTo(['make reservations']);
     
    }
}
