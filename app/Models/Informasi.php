<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function jenisBantuan()
    {
        return $this->hasMany(JenisBantuan::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
}
