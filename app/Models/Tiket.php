<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pesawat(){
        return $this->belongsTo(Pesawat::class, 'pesawat_id');
    }

    public function bandaraAsal(){
        return $this->belongsTo(Bandara::class, 'bandaraasal_id');
    }
    
    public function bandaraTujuan(){
        return $this->belongsTo(Bandara::class, 'bandaratujuan_id');
    }
    

    public function pemesanan(){
        return $this->hasMany(Pemesanan::class);
    }
}
