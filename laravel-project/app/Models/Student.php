<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected$with = ['classroom'];

    protected $fillable = [
        'name',
        'email',
        'sekolah',
        'tanggal_lahir',
        'nisn',
        'classroom_id',
        'tempat_lahir',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
