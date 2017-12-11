<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    $role_user = Role::where('name', 'usuario')->first();
	    $role_admin  = Role::where('name', 'administrador')->first();
	    
	    $user = new User();
	    $user->name = 'Arantxa';
	    $user->email = 'usuario@gmail.com';
	    $user->password = bcrypt('123456');
	    $user->save();
	    $user->roles()->attach($role_user);

	    $admin = new User();
	    $admin->name = 'Pamela Administradora';
	    $admin->email = 'admin@gmail.com';
	    $admin->password = bcrypt('123456');
	    $admin->save();
	    $admin->roles()->attach($role_admin);
    }
}
