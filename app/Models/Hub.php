<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    protected $fillable = [
        "key_user",'name', 'password',"json1","ip","useragent","session_id","cookies","user_agent","country"
    ];
}
