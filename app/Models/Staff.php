<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nip', 'email', 'nama', 'tanngal_lahir', 'no_hp']; // fillable supaya database dapat diisi oleh seeder
    public $timestamps = false;

    use HasFactory;
}
