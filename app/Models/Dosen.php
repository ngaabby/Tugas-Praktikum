<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    public $timestamps = false;
    public function ktm()
    {
        return $this->hasOne(ktm::class, 'id_dosen');
    }
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'matakuliah',
        'gender'
    ];
}