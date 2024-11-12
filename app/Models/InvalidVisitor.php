<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvalidVisitor extends Model
{
    protected $fillable = [
        'ip', 'user_agent', 'key',"session_id"
    ];
}
