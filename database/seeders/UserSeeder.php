<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Carlos',
            'phone' => '12345678',
            'email' => 'jossecarlos2378@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('Jose22232003')
        ]);
        User::create([
            'name' => 'Victor Lux',
            'phone' => '12345678',
            'email' => 'victorferlux95@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('Motosanjose95')
        ]);

        // crear role Administrador
        $admin    = Role::create(['name' => 'ADMIN']);

        // crear permisos componente categories
        Permission::create(['name' => 'Category_Create']);
        Permission::create(['name' => 'Category_Search']);
        Permission::create(['name' => 'Category_Update']);
        Permission::create(['name' => 'Category_Destroy']);

               // crear permisos componente categories
        Permission::create(['name' => 'Product_Create']);
        Permission::create(['name' => 'Product_Search']);
        Permission::create(['name' => 'Product_Update']);
        Permission::create(['name' => 'Product_Destroy']);

        // asignar permisos al rol admin sobre categories
        $admin->givePermissionTo(['Category_Create', 'Category_Search', 'Category_Update', 'Category_Destroy']);

        // asignar role admin al usuario Jose Carlos
        $uAdmin = User::find(1);
        $uAdmin->assignRole('ADMIN');
    }
}
