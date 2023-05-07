<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'scores';
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function mapel(){
        return $this->belongsTo(score::class);
    }
}
