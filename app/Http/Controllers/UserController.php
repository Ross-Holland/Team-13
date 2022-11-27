<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
function login(Request $req)
{
    $check = User::where(['EmailAddress' => $req->email])->first();
    
     if(!$check || !Hash::check($req->password,$check->Password)){
         return "The password or username does not match!";
     }
     else{
         $req->session()->put('user', $check);
         return redirect('/welcome');
     }
}


}
