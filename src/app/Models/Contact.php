<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    // filalble(書き換え等の操作可能)設定
    protected $fillable = [
        'name',
        'email',
        'tel',
        'content'
    ];
}
