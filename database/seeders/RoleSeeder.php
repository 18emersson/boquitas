<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //se crean los roles (se puede agregar mas roles)
        $roleAdmin = Role::create([ 'name' => 'Admin']);
        $roleCoordinador = Role::create([ 'name' => 'Coordinador']);

        //crear los permisos
        Permission::create([ 'name' => 'admin.home'])->syncRoles([ $roleAdmin, $roleCoordinador]);//permiso para entrar al dashboard
        Permission::create([ 'name' => 'admin.users.index'])->assignRole($roleAdmin);//permiso para ver la lista de usuarios

        
        

    }
}
