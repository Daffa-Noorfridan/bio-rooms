<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruangan extends Model
{
    use HasFactory;
    protected $fillable=['nama_ruangan','kapasitas','lokasi','fasilitas'];

    protected $casts = [
        'fasilitas' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Event::class);
    }
}
