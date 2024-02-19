<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','user_id','comentario','status'];
    
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
    
    public function users(){
        return $this->belongsToMany(Users::class);
    }


}
