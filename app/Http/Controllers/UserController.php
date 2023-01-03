<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    public function users()
    {
         // dd($user);

        // $user = new User();
        // $user->name = 'neaz';
        // $user->email = 'neaz@gmail.com';
        // $user->password = bcrypt('password') ;
        // $user->save();

        // $user = User::all();
        // return $user;

        // User::where('id', 3)->delete();

        User::update(['name' => 'morshed']);


        // DB::insert('insert into users (name,email,password) values (?,?,?)', [
        // 'neaz', 'neaz@gmail.com', 'password',   

        // ]);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 1', ['morshed']);

        // DB::delete('delete from users where id = 1');

     
        return view('home');
    }
}
