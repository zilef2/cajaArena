<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class usersForSelect extends Controller
{
    public function index(){
        // dd(UserResource::collection(User::latest()->paginate()));
        return UserResource::collection(User::latest()->paginate());
    }
}
