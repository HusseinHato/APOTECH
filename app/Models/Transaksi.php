<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function obats()
    {
        return $this->belongsToMany(Obat::class, 'detil_transaksis')->withPivot('qty', 'pricesum');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
