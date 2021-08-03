<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaIlmiahDTPS extends Model
{
    use HasFactory;
    protected $table = 'karya_ilmiah_d_t_p_s';
    protected $fillable = ['user_id', 'judul'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
