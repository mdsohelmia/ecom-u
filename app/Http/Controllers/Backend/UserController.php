<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {

        return view('backend.users.index', [
            'users' => User::select(['id','first_name','last_name','email','role','created_at','created_by','is_active'])
                ->with('createBy:id,first_name')->simplePaginate(),
        ]);
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => strtolower(trim($request->input('email'))),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ];
        User::create($data);
        return back();
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }


    //orm
}


