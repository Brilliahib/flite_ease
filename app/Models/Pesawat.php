<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesawat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tiket(){
        return $this->hasMany(Tiket::class);
    }
}
