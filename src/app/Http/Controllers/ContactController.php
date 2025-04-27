<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// DBに情報を保存するため、モデルを反映
use App\Models\Contact;

class ContactController extends Controller
{
    // index.blade.phpのブラウザ表示
    public function index()
    {
        return view('index');
    }
    
    // confirmアクションの追加：問合せフォームでの送信ボタンのアクション
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

    // storeアクションの追加：入力内容確認画面での送信ボタンのアクション
    // storeアクションでは、問合せ入力時に送信された内容をさらにconfirmのformタグから送信された値として受け取る必要があるので、下記の記述になっている。
    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        // DBに保存処理する記述
        Contact::create($contact);
        // viewの表示先をthanks.blade.phpに
        return view('thanks');
    }
}