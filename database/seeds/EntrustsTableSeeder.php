<?php

use Illuminate\Database\Seeder; 
use App\Model\Role;
use App\Model\Permission;
class EntrustsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
    
         


	/*
    |--------------------------------------------------------------------------
    | Default Permissions 
    |--------------------------------------------------------------------------
    |
    | The default permissions
    |
    */

		$dashboard = new Permission();
		$dashboard->name         = 'dashboard';
		$dashboard->display_name = 'Dashboard';  
		$dashboard->description  = 'Permissions to see the dashboard';  
		$dashboard->save(); 

		$editUser = new Permission();
		$editUser->name         = 'edit-user';
		$editUser->display_name = 'Edit Users';
		$editUser->description  = 'Edit existing users';
		$editUser->save();

		$createPost = new Permission();
		$createPost->name         = 'create-post';
		$createPost->display_name = 'Create Posts';
		$createPost->description  = 'Create new blog posts';
		$createPost->save();

		$editPost = new Permission();
		$editPost->name         = 'edit-post';
		$editPost->display_name = 'Edit Posts';
		$editPost->description  = 'Edit existing blog posts';
		$editPost->save();



    /*
    |--------------------------------------------------------------------------
    | Default Roles 
    |--------------------------------------------------------------------------
    |
    | The default roles
    |
    */

		$user = new Role();
		$user->name         = 'owner';
		$user->display_name = 'Project Owner'; 
		$user->description  = 'User is the owner of a given project'; 
		$user->save();

		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'User Administrator'; 
		$admin->description  = 'User is allowed to manage and edit the application'; 
		$admin->save();
  
		$admin->perms()->sync([$dashboard->id,$editUser->id,$editPost->id]); 



    }
}
