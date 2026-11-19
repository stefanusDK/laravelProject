<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Setiap Guru mengajar 1 mapel
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
