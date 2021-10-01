<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceCode extends Model
{
    use HasFactory;

    protected $table = 'invoice_code';
    protected $fillable = ['invoice_code'];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
