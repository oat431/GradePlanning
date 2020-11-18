<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class student extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    const uap=0;
    const ap=1;
    protected $fillable = [
        "studentName",
        "studentID"
    ];

}
