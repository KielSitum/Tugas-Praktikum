<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $fillable = ['id_dosen', 'nip', 'nama', 'alamat'];
    public $timestamps = false;
    public function ktm(){
        return $this->hasOne(Ktm::class, 'id_dosen');
    }
    use HasFactory;
}