<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table = 'Pemesanans';

    protected $fillable =[
        'nama_pelangan',
        'nomor_meja',
        'jumlah',
        'total_harga',
        'status'
    ]

     public function menus()
    {
        return $this->belongsTo(menu::class);
    }

     public function peminjamans()
    {
        return $this->hasMany(peminjaman::class);
    }

}
