<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'students';
    protected $keyType = 'string';
    protected $primaryKey = 'nisn';
    protected $fillable = ['nisn', 'nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','alamat','nama_ibu','no_tlp','status'];

    public function classess(){
        return $this->belongsTo(Classess::class);
    }
    public function scores(){
        return $this->hasMany(score::class);
    }

}
