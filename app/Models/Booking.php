<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['id_ruangan','id_addons','pic','tanggal','jam_mulai','jam_akhir','topik','jumlah_peserta'];
}
