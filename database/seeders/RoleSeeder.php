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
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Colaborador']);

       Permission::create(['name' => 'admin.home',
                            'description'=>'Ver el dashboard'])->syncRoles([$role1,$role2]);

       Permission::create(['name' => 'admin.users.index',
                            'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.edit',
                            'description'=>'Asignar un rol'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.roles.index',
                           'description'=>'Ver listado de roles'])->syncRoles([$role1]);

       Permission::create(['name' => 'admin.categories.index',
                            'description'=>'Ver categorias'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.categories.create',
                            'description'=>'Crear categoria'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.categories.edit',
                            'description'=>'Editar categoria'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.categories.destroy',
                            'description'=>'Eliminar categoria'])->syncRoles([$role1]);

       Permission::create(['name' => 'admin.tags.index',
                            'description'=>'Ver etiquetas'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.tags.create',
                            'description'=>'Crear etiquetas'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.edit',
                            'description'=>'Editar etiquetas'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.destroy',
                            'description'=>'Eliminar etiquetas'])->syncRoles([$role1]);

       Permission::create(['name' => 'admin.posts.index',
                            'description'=>'Ver publicaciones'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.posts.create',
                            'description'=>'Crear publicaciones'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.posts.edit',
                            'description'=>'Editar publicaciones'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.posts.destroy',
                            'description'=>'Eliminar publicaciones'])->syncRoles([$role1,$role2]);

    }
}
