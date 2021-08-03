<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublikasiIlmiahDTPS extends Model
{
    use HasFactory;
    protected $table = 'publikasi_ilmiah_d_t_p_s';
    protected $fillable = ['user_id', 'jenis'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
