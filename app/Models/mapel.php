<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'mapels';
    
    protected $primaryKey = 'id_mapel';
    public $incrementing = false;

    public function classess(){
        return $this->belongsTo(Classess::class);
    }

    public function jobs(){
        return $this->hasMany(job::class);
    }

    public function exams(){
        return $this->hasMany(exam::class);
    }

    public function scores(){
        return $this->hasMany(score::class);
    }
}
