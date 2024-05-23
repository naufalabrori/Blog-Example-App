<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content'
    ];

    // Function buatan sendiri yang dapat dipanggil di controller
    public function scopeIsActiveRow($query){
        return $query->where('isActive', true);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
