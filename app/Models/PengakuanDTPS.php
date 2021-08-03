<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengakuanDTPS extends Model
{
    use HasFactory;
    protected $table = 'pengakuan_d_t_p_s';
    protected $fillable = ['user_id', 'keahlian', 'bukti', 'tingkat'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
