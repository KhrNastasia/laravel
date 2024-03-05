<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getOne($id){
        return new UserResource(User::findOrFail($id));
    }

    public function getAll(){
        return UserResource::collection(User::paginate(1));
    }
}
