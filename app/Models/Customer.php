<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = ['pt_id','nama_agent', 'email_agent', 'no_telp_agent' ];


    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}
