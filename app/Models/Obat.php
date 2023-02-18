<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category', 'keluhans', 'transaksis'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%'.$search.'%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function keluhans()
    {
        return $this->belongsToMany(Keluhan::class, 'keluhan__obats');
    }

    public function transaksis()
    {
        return $this->belongsToMany(Transaksi::class, 'detil_transaksis')->withPivot('qty', 'pricesum');
    }
}
