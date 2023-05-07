<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'teachers';
    protected $keyType = 'string';
    protected $primaryKey = 'nip';
    public $incrementing = false;

    public function classess(){
        return $this->belongsTo(Classess::class);
    }
}
