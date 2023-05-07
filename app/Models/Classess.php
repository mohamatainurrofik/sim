<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classess extends Model
{
    use HasFactory;
    protected $table = 'classesses';
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function mapels(){
        return $this->hasMany(mapel::class);
    }

    public function teacher(){
        return $this->hasOne(teacher::class);
    }
}
