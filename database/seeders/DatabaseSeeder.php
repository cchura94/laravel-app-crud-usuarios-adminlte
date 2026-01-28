<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        /*
        $role1 = Role::create(['name' => 'Super Admin']);
        $role2 = Role::create(['name' => 'Administrador']);
        $roleSup = Role::create(['name' => 'supervisor']);
        $roleTec = Role::create(['name' => 'Técnico']);


        $permissionListar = Permission::create(['name' => 'listar usuario']);
        $permissionGuardar = Permission::create(['name' => 'guardar usuario']);
        $permissionMostrar = Permission::create(['name' => 'mostrar usuario']);
        $permissionEditar = Permission::create(['name' => 'editar usuario']);
        $permissionElininar = Permission::create(['name' => 'eliminar usuario']);
        

        $role1->givePermissionTo([$permissionListar, $permissionGuardar, $permissionMostrar,$permissionEditar,$permissionElininar]);
        
        $role2->givePermissionTo([$permissionListar, $permissionGuardar]);
        */
        $userAdmin = User::find(1);
        $userAdmin->assignRole('Super Admin');

        $userDavid = User::find(2);
        $userDavid->assignRole('Administrador');

    }
}
