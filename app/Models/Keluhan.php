<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function obats()
    {
        return $this->belongsToMany(Obat::class, 'keluhan__obats');
    }
}
