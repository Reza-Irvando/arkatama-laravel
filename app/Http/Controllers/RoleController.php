<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = [
            [
                "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
                "name" => "Admin",
            ],
            [
                "id" => "105aea64-0b01-4883-b536-9889f06498d7",
                "name" => "Staff"
            ],
            [
                "id" => "bb2d6c9e-4a86-485c-bde6-2a83c2b30dd5",
                "name" => "Customer"
            ]
        ];
        return view("role.index", ['roles' => $roles]);
    }
}
