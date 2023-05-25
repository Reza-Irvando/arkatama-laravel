<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" => "1",
                "avatar" => "avatar",
                "name" => "Admin 1",
                "email" => "admin1@mail.com",
                "phone" => "081111111111",
                "role" => "Admin"
            ],
            [
                "id" => "2",
                "avatar" => "avatar",
                "name" => "Admin 2",
                "email" => "admin2@mail.com",
                "phone" => "082222222222",
                "role" => "Admin"
            ],
            [
                "id" => "3",
                "avatar" => "avatar",
                "name" => "Admin 3",
                "email" => "admin3@mail.com",
                "phone" => "083333333333",
                "role" => "Admin"
            ],
            [
                "id" => "4",
                "avatar" => "avatar",
                "name" => "Staff 1",
                "email" => "staff1@mail.com",
                "phone" => "084444444444",
                "role" => "Staff"
            ],
            [
                "id" => "5",
                "avatar" => "avatar",
                "name" => "Staff 2",
                "email" => "staff2@mail.com",
                "phone" => "085555555555",
                "role" => "Staff"
            ],
            [
                "id" => "6",
                "avatar" => "avatar",
                "name" => "Staff 3",
                "email" => "staff3@mail.com",
                "phone" => "08666666666",
                "role" => "Staff"
            ],
            [
                "id" => "7",
                "avatar" => "avatar",
                "name" => "Customer 1",
                "email" => "customer1@mail.com",
                "phone" => "087777777777",
                "role" => "Customer"
            ],
            [
                "id" => "8",
                "avatar" => "avatar",
                "name" => "Customer 2",
                "email" => "customer2@mail.com",
                "phone" => "088888888888",
                "role" => "Customer"
            ],
            [
                "id" => "9",
                "avatar" => "avatar",
                "name" => "Customer 3",
                "email" => "customer3@mail.com",
                "phone" => "089999999999",
                "role" => "Customer"
            ],
            [
                "id" => "10",
                "avatar" => "avatar",
                "name" => "Customer 4",
                "email" => "customer4@mail.com",
                "phone" => "081234567890",
                "role" => "Customer"
            ]
            ];
        return view("user.index", ['users' => $users]);
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
