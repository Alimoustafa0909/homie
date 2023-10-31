<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserRequest;
use App\Models\User;
use App\Services\DashboardServices\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
      $users = User::paginate(3);
      return view('dashboard.users.index',compact('users'));
    }

    public function create()
    {
       return view('dashboard.users.create');
    }

    public function store(UserRequest $request)
    {
        $attributes = $request->validated();

        $attributes['image'] = uploadImage($request->file('image'),'users');

        $this->userService->store($attributes);


        return redirect()->route('dashboard.users.index')->with('success_message','The user has been created successfully');
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit',compact('user'));
    }

    public function update(UserRequest $request,User $user)
    {
        $attributes = $request->validated();
        if ( request()->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'users');

        $this->userService->Update($user, $attributes);

        return redirect()->route('dashboard.users.index')->with('success_message','The user has been Updated successfully');
    }

    public function show(User $user)
    {
        return view('dashboard.users.show',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('success_message','The user has been Deleted successfully');

    }


}
