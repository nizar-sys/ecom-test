<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'jumlah',
    ];

    // function boot
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->kode = 'BRG-' . sprintf('%04d', (self::max('id') + 1));
            $model->created_at = now();
        });

        self::updating(function ($model) {
            $model->updated_at = now();
        });
    }
}
