<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id'];

    public function reviews(){
        return $this->belongsToMany(product::class, 'reviews', 'user_id', 'product_id');
}
}