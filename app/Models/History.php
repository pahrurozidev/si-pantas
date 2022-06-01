<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jenisBantuan()
    {
        return $this->belongsTo(JenisBantuan::class, 'jenisBantuan_id');
    }

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'informasi_id');
    }
}
