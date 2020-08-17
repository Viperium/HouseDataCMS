<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
// create

//        $data = [
//            'name' => 'admin',
//            'email' => 'admin@admin.nl',
//            'password' => 'password'
//        ];
//
//        User::create($data);

//        $user = new User();
//        $user->name = 'Viperium';
//        $user->email = 'yoran.viperium@gmail.com';
//        $user->password = bcrypt('password');
//        $user->save();

// delete User::where('id', 1)->delete();
// update User::where('id', 2)->update(['name' => 'Viperium']);

        // Read
        $user = User::all();
        return $user;
    }
}
