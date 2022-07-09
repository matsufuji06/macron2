<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //  バリデーションのルールを定義
    public function rules()
    {
        return [
            'food' => ['required', 'max:50'],
            'image' => ['file'],
            'carbo' => ['required', 'number'],
            'fat' => ['required', 'number'],
            'protein' => ['required', 'number'],
            'calorie' => ['required', 'number'],
            'protein' => ['required', 'number'],
            'weight' => ['required', 'number'],
        ];
    }
    
    //  エラーメッセージ表示時の項目名を設定
    public function attributes()
    {
        return [
            'food' => '食べたもの',
            'image' => '画像',
            'carbo' => '炭水化物',
            'fat' => '脂質',
            'protein' => 'タンパク質',
            'calorie' => 'カロリー',
            'weight' => '現在の体重',
        ];
    }
}
