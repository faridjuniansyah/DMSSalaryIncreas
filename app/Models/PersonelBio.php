<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonelBio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tingkat',
        'tahun',
        'personels_id',
    ];
    public function user()
    {
        return $this->belongsTo(Personel::class, 'personels_id');
    }
}
