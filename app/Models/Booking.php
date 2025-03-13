<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['tanggal','jam_mulai','jam_akhir','pic','jumlah_peserta','topik'];
}
