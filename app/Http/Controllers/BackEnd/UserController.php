<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserRepository $userService;

    public function __construct(UserRepository $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = $this->userService->store($request);
        if (!$user) {
            $notifications = array('message' => 'SomeThing Went Wrong','alert-type' => 'error');
            return redirect(back())->with($notifications);
        }

        // 'role' => $request->get('role'),
        $notifications = array('message' => 'SomeThing Went Wrong','alert-type' => 'error');
        return redirect(back())->with($notifications);

    }
}
