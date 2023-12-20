<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class product extends Model
{
    use HasFactory, Rateable;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function reviews(){
        return $this->belongsToMany(User::class, 'reviews', 'product_id', 'user_id');
    }

}
