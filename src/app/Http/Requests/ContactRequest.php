<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contactrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // falseからtrueに変更し、アクセス可能にする
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //  バリデーションルールの設定
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tel' => 'required|numeric|digits_between:10,11'
        ];

        // 解答:連想配列の形だった
        /* 
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'tel' => ['required', 'numeric', 'digits_between:10,11'],
         */
    }
}
