<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id', 'nama_acara', 'tanggal_mulai', 'tanggal_selesai'
    ];

    public function room()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
