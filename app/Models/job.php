<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'jobs';
    protected $keyType = 'string';
    protected $primaryKey = 'id_tugas';
    public $incrementing = false;

    public function mapel(){
        return $this->belongsTo(mapel::class);
    }
}
