<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** user **/
        $user = new User();
        $user->email = "user@demo.com";
        $user->firstname = "user";
        $user->lastname = "demo";
        $user->username = "user.demo";
        $user->password = bcrypt('userdemo');
        $user->save();

        /** admin **/
        $admin = new User();
        $admin->email = "admin@demo.com";
        $admin->firstname = "admin";
        $admin->lastname = "demo";
        $admin->username = "admin.demo";
        $admin->password = bcrypt('admindemo');
        $admin->save();
 
        $admin->roles()->attach(Role::where('name','admin')->first()->id);
    }
}
