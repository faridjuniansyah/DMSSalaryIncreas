<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'personels_id');
    }

    public function tanda_kehormatan()
    {
        return $this->hasMany(TandaKehormatan::class, 'personels_id');
    }

    public function personelBio()
    {
        return $this->hasMany(PersonelBio::class, 'personels_id');
    }

    public function kemampuan_bahasa()
    {
        return $this->hasMany(KemampuanBahasa::class, 'personels_id');
    }
    public function penugasan_luar()
    {
        return $this->hasMany(PenugasanLuar::class, 'personels_id');
    }

    public function pengembangan_pelatihan()
    {
        return $this->hasMany(PengembanganPelatihan::class, 'personels_id');
    }

    


}
