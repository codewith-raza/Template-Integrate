<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;

    public $fillable = ['title','description','question_id'];

    public function question()
    {
        return $this->hasMany(Qustion::class);
    }
}
