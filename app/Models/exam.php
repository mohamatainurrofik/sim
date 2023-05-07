<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    
    protected $primaryKey = 'id_ujian';
    public $incrementing = false;
    protected $guarded = [];

    public function mapel(){
        return $this->belongsTo(mapel::class);
    }
}
