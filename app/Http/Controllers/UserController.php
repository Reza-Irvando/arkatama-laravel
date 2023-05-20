<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("user.index");
    }

    public function login(){
        return view("user.login");
    }

    public function create(){
        return view("user.create");
    }
    
    public function listUser(){
        return view("user.listUser");
    }
    
    public function detailUser(){
        return view("user.detailUser");
    }

    public function updateUser(){
        return view("user.updateUser");
    }
}
