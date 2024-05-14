<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaKehormatan extends Model
{
    use HasFactory;

    public function personel()
    {
        return $this->belongsTo(Personel::class, 'personels_id');
    }
}
