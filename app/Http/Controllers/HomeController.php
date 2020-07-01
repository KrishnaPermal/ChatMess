<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getFriends(Request $request, $id)
    {
        $getUser = User::find($id)->with('friends')->get();

        return $getUser;
        //return new UsersResource($getUser);
    }
}
