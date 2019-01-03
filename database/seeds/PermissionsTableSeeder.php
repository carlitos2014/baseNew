<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name'			=> 'Navegar usuario',
        	'slug' 			=> 'users.index',
        	'description'	=> 'Lista y navega todos los usuario del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle de usuario',
        	'slug' 			=> 'users.show',
        	'description'	=> 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de usuario',
        	'slug' 			=> 'users.edit',
        	'description'	=> 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Eliminar usuario',
        	'slug' 			=> 'users.destroy',
        	'description'	=> 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name'			=> 'Navegar roles',
        	'slug' 			=> 'roles.index',
        	'description'	=> 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Crear rol',
        	'slug' 			=> 'roles.create',
        	'description'	=> 'Crear rol en el sistema',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle de rol',
        	'slug' 			=> 'roles.show',
        	'description'	=> 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de roles',
        	'slug' 			=> 'roles.edit',
        	'description'	=> 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Eliminar rol',
        	'slug' 			=> 'roles.destroy',
        	'description'	=> 'Eliminar cualquier rol del sistema',
        ]);


        //Permissions
        Permission::create([
        	'name'			=> 'Navegar permisos',
        	'slug' 			=> 'permissions.index',
        	'description'	=> 'Lista y navega todos los permisos del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Crear rol',
        	'slug' 			=> 'permissions.create',
        	'description'	=> 'Crear rol en el sistema',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle de permiso',
        	'slug' 			=> 'permissions.show',
        	'description'	=> 'Ver en detalle cada permiso del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de permisos',
        	'slug' 			=> 'permissions.edit',
        	'description'	=> 'Editar cualquier dato de un permisos del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Eliminar permiso',
        	'slug' 			=> 'permissions.destroy',
        	'description'	=> 'Eliminar cualquier permiso del sistema',
        ]);
    }
}
