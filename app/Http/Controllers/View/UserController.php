<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function toLogin(Request $request)
  {

    $data = $request->get('id','ss');

    $user = User::where('id','1')->get();
    return view('user')->with('user', $user);
  }

  public function toPost(Request $request)
  {


    dd($data);

  }
}
