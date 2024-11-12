<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValidVisitor extends Model
{
    protected $fillable = [
        'ip', 'user_agent', 'key_user',"session_id","country"
    ];
}
