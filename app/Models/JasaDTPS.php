<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaDTPS extends Model
{
    use HasFactory;
    protected $table = 'jasa_d_t_p_s';
    protected $fillable = ['user_id', 'produk', 'deksripsi', 'bukti', 'tahun'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
