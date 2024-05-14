<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonelBio extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Personel::class, 'personels_id');
    }
}
