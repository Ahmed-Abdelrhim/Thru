<?php
namespace App\Repositories;

use App\Interfaces\RoleInterface;
use App\Interfaces\UserInterface;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class UserRepository implements UserInterface
{
    public function store($request)
    {
        $rules = [
            'name' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/' , 'max:100'],
            'email' => ['required', 'string' , 'email' , 'unique:users,email' , 'max:255'],
            'password' => ['required','string', 'min:8' , 'max:255'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return $request;
        $user = User::query()->create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'created_at' => Carbon::now(),
        ]);
        if ($user) {
            return true;
        }
        return false;

    }

    public function edit()
    {

    }

    public function destroy()
    {

    }
}
