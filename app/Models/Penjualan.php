<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $fillable = ['number', 'invoice_code_id', 'tanggal', 'barang_id', 'jumlah', 'full_number'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function invoice_code()
    {
        return $this->belongsTo(InvoiceCode::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->number = Penjualan::where('invoice_code_id', $model->invoice_code_id)->max('number') + 1;
            $model->full_number = $model->invoice_code->invoice_code . '-' . str_pad($model->number, 5, '0', STR_PAD_LEFT);
        });
    }
}
