<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Repositories\RoleRepository;


class RoleController extends Controller
{
    public RoleRepository $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }
    public function index()
    {
        $this->data['roles'] = $this->roleRepository->all();
        return view('role.index', $this->data);
    }
    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $role = $this->roleRepository->store($request);
        if (!$role) {
            $notifications = array('message' => 'SomeThing Went Wrong','alert-type' => 'error');
            return redirect(RouteServiceProvider::Role)->with($notifications);
        }
        $notifications = array('message' => 'The Role Created Successfully','alert-type' => 'success');
        return redirect(RouteServiceProvider::Role)->with($notifications);
    }

    public function show($role_id)
    {
        $id = decrypt($role_id);
        $this->data = $this->roleRepository->show($id);
        return view('role.show',  $this->data);
    }
    public function savePermission(Request $request , $id)
    {
        $permissions = $request->all();
        unset($permissions['_token']);
        $permissions = array_values($permissions);

        $this->roleRepository->saveRolePermissions($request , $id);
        $notifications = array('message' => 'Data Saved Success' , 'alert-type' => 'success');
        return redirect(RouteServiceProvider::Role)->with($notifications);
    }
    public function edit($role_id)
    {
        //TODO : GET Role Here
        return view('role.edit');
    }
    public function update($role_id)
    {
        //TODO : Update Role Here
        return view('role.index');
    }
    public function destroy($id)
    {
        return response()->json(['success' => true , 'status' => 200]);
        // $this->roleRepository->destroy($id);
        // $notifications = array('message' => 'Data Deleted Success', 'alert-type' =>'success');
        // return redirect(route(RouteServiceProvider::Role))->with($notifications);
    }

    public function indexxx()
    {
        return view('role.indexxx');
    }
}
