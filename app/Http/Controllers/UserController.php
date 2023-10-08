<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function user(){
        $users  = User::all();
        return view('admin.user.index', compact('users'));
    }

    function userCreate(){
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    function userStore(Request $request){
        $roles = $request->input('roles');
        
       
        $create_user = new User();
        $create_user->name = $request->name;
        $create_user->lastname = $request->lastname;
        $create_user->cope_labor = $request->cope_labor;
        $create_user->technical_number = $request->technical_number;
        $create_user->password = Hash::make($request->password);
        $create_user->status = 1;
        $create_user->save();


        if(count($roles) == 0){
            $role_user =  new RoleUser();
            $role_user->role_id = 2;
            $role_user->user_id = $create_user->id;
            $role_user->user_type = 'App\Models\User';
            $role_user->save();
        }else{
            foreach($roles as $role){
                $role_user =  new RoleUser();
                $role_user->role_id = $role;
                $role_user->user_id = $create_user->id;
                $role_user->user_type = 'App\Models\User';
                $role_user->save();
    
            }
        }
        
        return redirect()->action([UserController::class, 'user'])->with('msg', 'Usuario creado con exito');
    }

    function userEdit($id){
        $user = User::where('id', $id)->get()->first();

        return view('admin.user.edit', compact('user'));
    }

    function userUpdate(Request $request){
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name, 
            'lastname' => $request->lastname,
            'cope_labor' => $request->cope_labor,
            'technical_number' => $request->technical_number,
        ]);

        return redirect()->action([UserController::class, 'user'])->with('msg', 'Usuario actualizado con exito');
    }

    function userDelete(Request $request){
        DB::table('users')->where('id', $request->id)->update([
            'status' => 0, 
        ]);
    }

}
