<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
     //   $role = Role::create(['name' => 'writer']);
        // $role = Role::create(['name' => 'editor']);
        // $role = Role::create(['name' => 'publisher']);
        // $role = Role::create(['name' => 'admin']);
       //  $permission = Permission::create(['name' => 'publish post']);

        //    $permission = Permission::findById(3);
        //    $role = Role::findById(4);

        //   $role->givePermissionTo($permission);

        // $permission->removeRole($role);

        //  $role->revokePermissionTo($permission);

         // auth()->user()->givePermissionTo('edit post');

         // return auth()->user()->permissions;

          // return User::permission('edit post')->get();

        return view('dashboard');
    }
}
