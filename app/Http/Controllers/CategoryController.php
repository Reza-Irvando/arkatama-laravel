<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = [
            [
                "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
                "name" => "Cellphone",
            ],
            [
                "id" => "105aea64-0b01-4883-b536-9889f06498d7",
                "name" => "Tablet"
            ],
            [
                "id" => "bb2d6c9e-4a86-485c-bde6-2a83c2b30dd5",
                "name" => "Wearable"
            ],
            [
                "id" => "c2209c46-99b1-4cf5-a1cb-243c4d6ff3bb",
                "name" => "Laptop"
            ],
            [
                "id" => "8fc7a400-d1e4-4fa1-926a-2ecfdc3266d4",
                "name" => "Accessories"
            ]
        ];
        return view("category.index", ['categories' => $categories]);
    }
}
