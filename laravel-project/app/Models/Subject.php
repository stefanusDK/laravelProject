<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Setiap mapel diajar 1 guru (atau bisa hasMany tergantung kasus, di soal tertulis belongsTo/hasOne)
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
