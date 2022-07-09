<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $posts = [
            (object) [
                'id' => 1,
                'food' => 'ラーメン１',
                'image' => '',
                'calorie' => 1000,
                'carbo' => 1000,
                'fat' => 1000,
                'protein' => 1000,
                'weight' => 1000,
                'date' => now(),
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名１',
                ],
            ],
            (object) [
                'id' => 2,
                'food' => 'ラーメン２',
                'image' => '',
                'calorie' => 1000,
                'carbo' => 1000,
                'fat' => 1000,
                'protein' => 1000,
                'weight' => 1000,
                'date' => now(),
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'ユーザー名２',
                ],
            ],
            (object) [
                'id' => 3,
                'food' => 'ラーメン３',
                'image' => '',
                'calorie' => 1000,
                'carbo' => 1000,
                'fat' => 1000,
                'protein' => 1000,
                'weight' => 1000,
                'date' => now(),
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ユーザー名３',
                ],
            ]
            
        ];

        return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }
}
