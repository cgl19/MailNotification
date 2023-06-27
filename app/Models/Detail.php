<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'company',
        'title',
        'consulting',
        'message',
    ];
    use HasFactory;
}
