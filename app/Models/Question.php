<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function options(){
        return $this->hasMany(Option::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
