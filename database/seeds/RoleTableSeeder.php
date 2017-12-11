<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $role_user = new Role();
    $role_user->name = 'usuario';
    $role_user->description = 'Usuario normal';
    $role_user->save();

    $role_admin = new Role();
    $role_admin->name = 'administrador';
    $role_admin->description = 'Administrador';
    $role_admin->save();
    }
}
