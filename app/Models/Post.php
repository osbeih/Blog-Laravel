<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ // the data accept
        'title',
        'description',
        'user_id',
    ];

    // public function userRealation()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    
    ##another Way
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
}
