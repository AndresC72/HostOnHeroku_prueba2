<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hacker extends Model
{
    use HasFactory;
    protected $table = 'hackers';
    public function tipohacker(){
        return $this->belongsTo('App\Models\Tipohacker');
    }
    public function grupoHacker(){
        return $this->belongsTo('App\Models\grupoHacker');
    }
}
