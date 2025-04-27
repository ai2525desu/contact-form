<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // index.blade.phpのブラウザ表示
    public function index()
    {
        return view('index');
    }
    
    // confirmアクションの追加
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        /* 
        view('第一引数：表示先のファイル', '第二引数：viewメソッドに渡す値')
        return view('confirm', ['contact' => $contact]);
        */
        // 上記をcompact関数を使用してシンプルにしたもの
        return view('confirm', compact('contact'));
    }

}
