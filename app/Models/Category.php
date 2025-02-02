<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_name',
        'password',
    ];

    // public function user()
    // {
    //     //one to one relation
    //     // return $this->hasOne(User::class,'id','user_id'); 
    // }


    
}
