<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Request;

class UserController extends Controller


{
    public function uploadAvater(Request $request)
    {
        if ($request->hasFile('image')); {
            $filename = ($request->image->getClientOriginalName());
            if (auth()->user()->avater){
                Storage::delete('/public/images/' .auth()->user()->avater);
            }
            $request->image->storeas('images', $filename, 'public');
            auth()->user()->update(['avater' =>$filename]);
            }
        
        return redirect()->back();// code...
    }

    public function index()

    {
        // $user = new User();
        // $user->name = 'dhinka';
        // $user->email = 'noun006@fproject.com';
        // $user->password = bcrypt('password');
        // $user->save();

        $data = [
            'name'=> 'James',
            'email'=> 'jamesrodriguz@ggha.com',
            'password'=> 'imgghadid'
        ];

        // User::create($data);


        $user = User::all();
        return $user;

        // User::where('id', 7)->delete();

        // User::where ('id',6)->update(['name' => 'kutta']);

        //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [1, 'Dayle', 'dayle@fproject.com', 'ipassword']);

       //  $users = DB::select('select * from users');
       //  return $users;
       //  DB::update('update users set name = ? where id = 1', ['John']);
       //  DB::delete('delete from users where id =1');
       // $users = DB::select('select * from users');
       //  return $users;
        return view('home');

    }//

}
