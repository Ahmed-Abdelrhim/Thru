<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(): View
    {

//        $role = Role::create(['name' => 'super admin']);
//        $role = Role::create(['name' => 'admin']);
//        $role = Role::create(['name' => 'Sales Supervisor']);
//        $role = Role::create(['name' => 'Sales developer']);
//        $role = Role::create(['name' => 'Sales builder']);

        $roles = Role::all();

        return view('permission.index', compact('roles'));
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $listPermissionsArray = [];
        foreach ($permissions as $permission) {
            if ( !strpos($permission, '_create') and !strpos($permission, '_show') and  !strpos($permission, '_edit') and !strpos($permission, '_delete')){
                $listPermissionsArray[$permission->id] = $permission;
            }
             $permissionArray[$permission->name] = $permission->id;
        }
        $this->data['role'] = $role;
        $this->data['permissions'] = $role->permissions->pluck('id', 'id');
        $this->data['permissionList'] = $listPermissionsArray;
        $this->data['permissionArray'] = $permissionArray;
        return view('permission.show', $this->data);
    }

    public function showUpdate(Request $request , $id)
    {
        $role = Role::findOrFail($id);
        // return $request;

        $requestOfPermissions = $request->except(['_token']);
        $permissions = Permission::whereIn('id', $requestOfPermissions)->get();
        $role->syncPermissions($permissions);
        $notifications = array('message' => 'success transaction' , 'alert-type' => 'success');
        return redirect(RouteServiceProvider::Permission)->with($notifications);
    }
}
