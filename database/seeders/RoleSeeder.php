<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
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
       $roleAdmin= Role::create(['name'=>'admin']);

       //crear los permisos 
       Permission::create(['name'=>'botones.editar-eliminar'])->syncRoles([$roleAdmin]);
       Permission::create(['name'=>'botones.nuevo'])->syncRoles([$roleAdmin]);
       Permission::create(['name'=>'botones.nav'])->syncRoles([$roleAdmin]);





    }
}
