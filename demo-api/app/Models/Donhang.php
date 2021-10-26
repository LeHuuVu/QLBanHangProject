<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SanPhams()
    {
        return $this->belongsToMany(SanPham::class);
    }
    public function User()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
