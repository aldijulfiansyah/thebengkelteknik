<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = ['nama_agent', 'perusahaan_id', 'email_agent', 'no_telp_agent'];


    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}
